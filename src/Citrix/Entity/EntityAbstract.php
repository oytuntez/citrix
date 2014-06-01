<?php
namespace Citrix\Entity;

abstract class EntityAbstract
{
  protected $client;
  protected $data;
  /**
   * @return the $client
   */
  protected function getClient()
    {
      return $this->client;
  }
  
  /**
   * @param field_type $client
   */
  protected function setClient($client)
    {
      $this->client = $client;
      
      return $this;
  }
/**
 * @return the $data
 */
public function getData()
  {
    return $this->data;
}

/**
 * @param field_type $data
 */
public function setData($data)
  {
    $this->data = $data;
    
    return $this;
}


}