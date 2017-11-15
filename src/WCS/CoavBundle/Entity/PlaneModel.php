<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 *
 * @ORM\Table(name="plane_model")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\PlaneModelRepository")
 */
class PlaneModel
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
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=128)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=64, nullable=true)
     */
    private $manufacturer;

    /**
     * @var int
     *
     * @ORM\Column(name="cruiseSpeed", type="smallint", nullable=true)
     */
    private $cruiseSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="planeNBSeats", type="smallint")
     */
    private $planeNBSeats;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAvailable", type="boolean")
     */
    private $isAvailable;

    /**
     * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\Flight", mappedBy="plane")
     */
    private $planeModels;

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
     * Set model
     *
     * @param string $model
     *
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     *
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return int
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set planeNBSeats
     *
     * @param integer $planeNBSeats
     *
     * @return PlaneModel
     */
    public function setPlaneNBSeats($planeNBSeats)
    {
        $this->planeNBSeats = $planeNBSeats;

        return $this;
    }

    /**
     * Get planeNBSeats
     *
     * @return int
     */
    public function getPlaneNBSeats()
    {
        return $this->planeNBSeats;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return PlaneModel
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->planeModels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add planeModel
     *
     * @param \WCS\CoavBundle\Entity\Flight $planeModel
     *
     * @return PlaneModel
     */
    public function addPlaneModel(\WCS\CoavBundle\Entity\Flight $planeModel)
    {
        $this->planeModels[] = $planeModel;

        return $this;
    }

    /**
     * Remove planeModel
     *
     * @param \WCS\CoavBundle\Entity\Flight $planeModel
     */
    public function removePlaneModel(\WCS\CoavBundle\Entity\Flight $planeModel)
    {
        $this->planeModels->removeElement($planeModel);
    }

    /**
     * Get planeModels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaneModels()
    {
        return $this->planeModels;
    }
}
