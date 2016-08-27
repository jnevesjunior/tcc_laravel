<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Enums\SituacaoEnum;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoa")
 * @ORM\HasLifecycleCallbacks()
 */
class Pessoa {
    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string $nome
     * @ORM\Column(name="nome", type="string", nullable=false)
     */
    private $nome;

    /**
     * @var string $cpf
     * @ORM\Column(name="cpf", type="string", nullable=false)
     */
    private $cpf;

    /**
     * @var string $rg
     * @ORM\Column(name="rg", type="string", nullable=false)
     */
    private $rg;

    /**
     * @var string $email
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    private $email;

    /**
     * @var string $tel
     * @ORM\Column(name="tel", type="string", nullable=false)
     */
    private $tel;

    /**
     * @var string $cel
     * @ORM\Column(name="cel", type="string", nullable=false)
     */
    private $cel;

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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param string $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * @param string $cel
     */
    public function setCel($cel)
    {
        $this->cel = $cel;
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