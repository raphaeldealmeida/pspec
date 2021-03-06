<?php
namespace PSpec;

class ExpectationResult{
    protected $success;
    protected $expectationText;
    protected $message;

    function  __construct($success, $message = '') {
        $this->success =  $success;
        $this->message = $message;
    }

    function countExamples() {
        $count = 0;
        foreach($this->results as $result) {
            $count += $result->count();
        }
        return $count;
    }

    function failed() {
        return !$this->success;
    }

    function getSuccess() {
        return $this->success;
    }

    function getMessage() {
        return $this->message;
    }
}