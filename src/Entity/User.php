<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email que vous avez indiquer est déja utilisé "
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     *
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\Length(min="6",minMessage="votre mot de passe doit faire au moins 6 caracteres")
     */
    private $password;

    /**
    *@Assert\EqualTo(propertyPath="password", message="vous n'avez pas tapez le même mot de passe")
    */
    public $confirm_password;

    /**
     * @ORM\ManyToMany(targetEntity=Roles::class, inversedBy="users")
     */
    private $Roles;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="users")
     */
    private $categories;

    public function __construct()
    {
        $this->Roles = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    public function eraseCredentials(){

    }
    public function getSalt(){}
    /**
     * @return Collection|Roles[]
     */
    public function getRole(): Collection
    {
        return $this->Roles;
    }

   
    public function getRoles(){
        foreach ($this->Roles as $role) {
            $roles[]=$role->getTitre();
        }
        
         return $roles;
    }

    public function addRole(Roles $role): self
    {
        if (!$this->Roles->contains($role)) {
            $this->Roles[] = $role;
        }

        return $this;
    }

    public function removeRole(Roles $role): self
    {
        if ($this->Roles->contains($role)) {
            $this->Roles->removeElement($role);
        }

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
        }

        return $this;
    }
}
