<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Participant
 *
 * @ORM\Table(name="participant", indexes={@ORM\Index(name="fk_participant_campaign1_idx", columns={"campaign_id"})})
 * @ORM\Entity
 */
class Participant
{
    public function __toString()
    {
        return $this->getName();
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var |null
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    public function getAllMailInDB(ManagerRegistry $doctrine)
    {
        $em = $doctrine->getRepository(Participant::class);
        $em->findOneBy(['email' => $this->email]);
    }

    /**
     * @var \Campaign
     *
     * @ORM\ManyToOne(targetEntity="Campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    private $campaign;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCampaign(): ?Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(?Campaign $campaign): self
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity=Payment::class, mappedBy="participant")
     */
    private $payments;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
    }



    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments[] = $payment;
            $payment->setParticipant($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->removeElement($payment)) {
            // set the owning side to null (unless already changed)
            if ($payment->getParticipant() === $this) {
                $payment->setParticipant(null);
            }
        }

        return $this;
    }

    public function getTotalPaid(): ?float
    {
        $total = 0;
        foreach ($this->payments as $payment) {
            $total += $payment->getAmount();
        }
        return $total;
    }


}
