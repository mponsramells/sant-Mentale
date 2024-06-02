<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Article extends Content
{
    /**
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedDate;

    // Getters
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->publishedDate;
    }

    // Setters
    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function setPublishedDate(\DateTimeInterface $publishedDate): self
    {
        $this->publishedDate = $publishedDate;
        return $this;
    }
}
