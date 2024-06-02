<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Video extends Content
{
    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="string")
     */
    private $resolution;

    // Getters
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    // Setters
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function setResolution(string $resolution): self
    {
        $this->resolution = $resolution;
        return $this;
    }
}
