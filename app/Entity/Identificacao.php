<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Enums\SituacaoEnum;

/**
 * @ORM\Entity
 * @ORM\Table(name="identificacao")
 * @ORM\HasLifecycleCallbacks()
 */
class Identificacao {
    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string $idPessoa
     * @ORM\OneToOne(targetEntity="Pessoa", fetch="EAGER")
     * @ORM\JoinColumn(name="id_pessoa", nullable=false)
     */
    private $idPessoa;

    /**
     * @var string $rfid
     * @ORM\Column(name="rfid", type="string", nullable=false)
     */
    private $rfid;

    /**
     * @var string $senha
     * @ORM\Column(name="senha", type="string", nullable=false)
     */
    private $senha;

    /**
     * @var integer $situacao
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    public function __construct() {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param string $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @return string
     */
    public function getRfid()
    {
        return $this->rfid;
    }

    /**
     * @param string $rfid
     */
    public function setRfid($rfid)
    {
        $this->rfid = $rfid;
    }

    /**
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return int
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param SituacaoEnum $situacao
     */
    public function setSituacao(SituacaoEnum $situacao)
    {
        $this->situacao = $situacao->getConstValue();
    }


}