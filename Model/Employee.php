<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
  var $validate = array('nazwisko' => array('rule' => 'notBlank'),'etat' => array('rule' => 'notBlank'),'placa_pod' => array('Min' => array('rule' => array('comparison','>=',0))),'placa_pod' => array('Max' => array('rule' => array('comparison','<=',2000))));
}
