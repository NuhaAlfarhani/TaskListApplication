<?php

use PHPUnit\Framework\TestCase;

require_once 'TaskList.php';

class TaskListTest extends TestCase
{
    public function testAddTask()
    {
        $taskList = new TaskList();
        $taskList->addTask("Belanja");
        $this->assertEquals(["Belanja"], $taskList->getTasks());
    }

    public function testRemoveTask()
    {
        $taskList = new TaskList();
        $taskList->addTask("Mencuci Baju");
        $taskList->removeTask("Mencuci Baju");
        $this->assertEquals([], $taskList->getTasks());
    }

    public function testRemoveNonExistentTask()
    {
        $taskList = new TaskList();
        $taskList->addTask("Jalan-jalan");
        $taskList->removeTask("Membaca Buku");
        $this->assertEquals(["Jalan-jalan"], $taskList->getTasks());
    }
}