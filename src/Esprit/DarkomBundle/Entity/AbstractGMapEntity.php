<?php
namespace Esprit\DarkomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
/**
 * Test\TestBundle\Entity\AbstractGMapEntity
 *
 * @author Sullivan SENECHAL
 *
 * @ORM\MappedSuperclass
 */
abstract class AbstractGMapEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    protected $address;
 
    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=255, nullable=true)
     */
    protected $localite;
 
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;
 
    /**
     * @var float     Latitude of the position
     *
     * @ORM\Column(name="lat", type="float", nullable=true)
     */
    protected $lat;
 
    /**
     * @var float     Longitude of the position
     *
     * @ORM\Column(name="lng", type="float", nullable=true)
     */
    protected $lng;
 
    public function setAddress($address)
    {
        $this->address = $address;
    }
 
    public function getAddress()
    {
        return $this->address;
    }
 
    public function setLocalite($localite)
    {
        $this->localite = $localite;
    }
 
    public function getLocalite()
    {
        return $this->localite;
    }
 
    public function setCountry($country)
    {
        $this->country = $country;
    }
 
    public function getCountry()
    {
        return $this->country;
    }
 
    public function getLat()
    {
        return $this->lat;
    }
 
    public function setLat($lat)
    {
        if (is_string($lat)) {
            $lat = floatval($lat);
        }
        $this->lat = $lat;
    }
 
    public function getLng()
    {
        return $this->lng;
    }
 
    public function setLng($lng)
    {
        if (is_string($lng)) {
            $lng = floatval($lng);
        }
        $this->lng = $lng;
    }
}
?>