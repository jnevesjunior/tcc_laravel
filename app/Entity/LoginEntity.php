<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Enums\SituacaoEnum;
use Illuminate\Support\Facades\Hash;

/**
 * @ORM\Entity
 * @ORM\Table(name="login")
 * @ORM\HasLifecycleCallbacks()
 */
class LoginEntity implements \Illuminate\Contracts\Auth\Authenticatable {

    use \LaravelDoctrine\ORM\Auth\Authenticatable;

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
     * @var string $usuario
     * @ORM\Column(name="usuario", type="string", nullable=false)
     */
    private $usuario;

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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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
        $this->senha = Hash::make($senha);
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