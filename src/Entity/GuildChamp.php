<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildChamp
 *
 * @ORM\Table(name="guild_champ")
 * @ORM\Entity(repositoryClass="App\Repository\GuildChampRepository")
 */
class GuildChamp extends Editable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Guild", inversedBy="guildCamps")
     * @ORM\JoinColumn(name="guild_id", referencedColumnName="id")
     */
    private $guild;

    /**
     * @ORM\ManyToOne(targetEntity="Champ", inversedBy="guildCamps")
     * @ORM\JoinColumn(name="champ_id", referencedColumnName="id")
     */
    private $champ;

    /**
     * @var int
     *
     * @ORM\Column(name="place", type="integer", nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Guild $guild
     *
     * @return GuildChamp
     */
    public function setGuild($guild)
    {
        $this->guild = $guild;

        return $this;
    }

    /**
     * @return Guild
     */
    public function getGuild()
    {
        return $this->guild;
    }

    /**
     * @param Champ $champ
     *
     * @return GuildChamp
     */
    public function setChamp($champ)
    {
        $this->champ = $champ;

        return $this;
    }

    /**
     * @return Champ
     */
    public function getChamp()
    {
        return $this->champ;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return GuildChamp
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GuildChamp
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
