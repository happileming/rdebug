<?php
namespace Midi\Koala\Replayed;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property int MatchedActionIndex 
    * @property string MatchedResponse 
    * @property float MatchedMark 
    * @property string Request 
    * @property string ActionType 
    * @property string ActionId 
    * @property Peer Peer 
    * @property int OccurredAt 
    * @property string MatchedRequest 
*/ 
class CallOutbound extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => CallOutbound::class,
        'className' => 'Midi\Koala\Replayed\CallOutbound',
        'annotations' => array(),
        'fields' => array(
            "MatchedActionIndex" => array(
                "fieldId" => 6, 
                "thriftType" => 'I64',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "MatchedResponse" => array(
                "fieldId" => 5, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "MatchedMark" => array(
                "fieldId" => 7, 
                "thriftType" => 'DOUBLE',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "Request" => array(
                "fieldId" => 8, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "ActionType" => array(
                "fieldId" => 3, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "ActionId" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "Peer" => array(
                "fieldId" => 9, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => Peer::class, 
            ),
            "OccurredAt" => array(
                "fieldId" => 2, 
                "thriftType" => 'I64',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "MatchedRequest" => array(
                "fieldId" => 4, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
        ),
    );

    public function __construct($array = null) 
    {
        if (!isset($array)) { 
            parent::__construct(array(), \ArrayObject::ARRAY_AS_PROPS);
            return;
        }

        parent::__construct($array, \ArrayObject::ARRAY_AS_PROPS); 

        if(isset($array["MatchedActionIndex"])) { 
            $this->setMatchedActionIndex($array["MatchedActionIndex"]);
        }

        if(isset($array["MatchedResponse"])) { 
            $this->setMatchedResponse($array["MatchedResponse"]);
        }

        if(isset($array["MatchedMark"])) { 
            $this->setMatchedMark($array["MatchedMark"]);
        }

        if(isset($array["Request"])) { 
            $this->setRequest($array["Request"]);
        }

        if(isset($array["ActionType"])) { 
            $this->setActionType($array["ActionType"]);
        }

        if(isset($array["ActionId"])) { 
            $this->setActionId($array["ActionId"]);
        }

        if(isset($array["Peer"])) { 
            $this->setPeer($array["Peer"]);
        }

        if(isset($array["OccurredAt"])) { 
            $this->setOccurredAt($array["OccurredAt"]);
        }

        if(isset($array["MatchedRequest"])) { 
            $this->setMatchedRequest($array["MatchedRequest"]);
        }

    }

    /** 
     * @return int 
    */ 
    public function getMatchedActionIndex()/* : int */ {
        return \Midi\Koala\Common\TypeConverter::to_int($this["MatchedActionIndex"]);
    }

    /** 
     * @param int $val 
    */ 
    public function setMatchedActionIndex(/* int */ $val) {
        $this["MatchedActionIndex"] = \Midi\Koala\Common\TypeConverter::to_int($val);
    }

    /** 
     * @return string 
    */ 
    public function getMatchedResponse()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["MatchedResponse"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setMatchedResponse(/* string */ $val) {
        $this["MatchedResponse"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return float 
    */ 
    public function getMatchedMark()/* : float */ {
        return \Midi\Koala\Common\TypeConverter::to_float($this["MatchedMark"]);
    }

    /** 
     * @param float $val 
    */ 
    public function setMatchedMark(/* float */ $val) {
        $this["MatchedMark"] = \Midi\Koala\Common\TypeConverter::to_float($val);
    }

    /** 
     * @return string 
    */ 
    public function getRequest()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["Request"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setRequest(/* string */ $val) {
        $this["Request"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return string 
    */ 
    public function getActionType()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionType"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionType(/* string */ $val) {
        $this["ActionType"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return string 
    */ 
    public function getActionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionId(/* string */ $val) {
        $this["ActionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return Peer 
    */ 
    public function getPeer()/* : Peer */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["Peer"], Peer::class);
    }

    /** 
     * @param Peer $val 
    */ 
    public function setPeer(/* Peer */ $val) {
        $this["Peer"] = \Midi\Koala\Common\TypeConverter::to_struct($val, Peer::class);
    }

    /** 
     * @return int 
    */ 
    public function getOccurredAt()/* : int */ {
        return \Midi\Koala\Common\TypeConverter::to_int($this["OccurredAt"]);
    }

    /** 
     * @param int $val 
    */ 
    public function setOccurredAt(/* int */ $val) {
        $this["OccurredAt"] = \Midi\Koala\Common\TypeConverter::to_int($val);
    }

    /** 
     * @return string 
    */ 
    public function getMatchedRequest()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["MatchedRequest"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setMatchedRequest(/* string */ $val) {
        $this["MatchedRequest"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }
}

/* THRIFT IDL
namespace php koala.replayed
include "idl/koala/replayed/Peer.thrift"

struct CallOutbound {
    1: string ActionId
    2: i64 OccurredAt
    3: string ActionType
    4: binary MatchedRequest
    5: binary MatchedResponse
    6: i64 MatchedActionIndex
    7: double MatchedMark
    8: binary Request
    9: Peer.Peer Peer
}
*/