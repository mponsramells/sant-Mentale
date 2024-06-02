<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Podcast extends Content
{
    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="string")
     */
    private $host;

    // Getters
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    // Setters
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function setHost(string $host): self
    {
        $this->host = $host;
        return $this;
    }
}
