<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workcpace
 *
 * @ORM\Table(name="workcpace")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class Workspace
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=false)
     */
    private $dueDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=true)
     */
    private $attachment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workspace_id", type="string", length=45, nullable=true)
     */
    private $workspaceId;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Workspace
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Workspace
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dueDate.
     *
     * @param \DateTime $dueDate
     *
     * @return Workspace
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set attachment.
     *
     * @param bool|null $attachment
     *
     * @return Workspace
     */
    public function setAttachment($attachment = null)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment.
     *
     * @return bool|null
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set workspaceId.
     *
     * @param string|null $workspaceId
     *
     * @return Workspace
     */
    public function setWorkspaceId($workspaceId = null)
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * Get workspaceId.
     *
     * @return string|null
     */
    public function getWorkspaceId()
    {
        return $this->workspaceId;
    }
}
