<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use App\Enums\SituacaoEnum;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="fluxo")
 * @ORM\HasLifecycleCallbacks()
 */
class FluxoEntity {
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
     * @ORM\ManyToOne(targetEntity="Pessoa", fetch="EAGER")
     * @ORM\JoinColumn(name="id_pessoa", nullable=false)
     */
    private $idPessoa;

    /**
     * @var $data
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;


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
     * @return DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param DateTime $data
     */
    public function setData($data)
    {
        $this->data = $data;
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