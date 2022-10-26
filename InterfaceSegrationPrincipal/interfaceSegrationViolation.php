<?php

// Interface Segregation Principle Violation
/**
 * Workable interface has abilities to do code and test
 * If a person who only want to test but this interface is
 * providing him also power to do code
 */
interface Workable
{
    public function canCode();
    public function code();
    public function test();
}

class Programmer implements Workable
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Workable
{
    public function canCode()
    {
        return false;
    }

    public function code()
    {
         throw new Exception('Opps! I can not code');
    }

    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
