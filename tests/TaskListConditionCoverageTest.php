<?php

use PHPUnit\Framework\TestCase;

require_once 'TaskList.php';

class TaskListConditionCoverageTest extends TestCase
{
    public function testAddTask()
    {
        $taskList = new TaskList();
        
        $initialTasks = $taskList->getTasks();
        $this->assertEmpty($initialTasks);
        
        $taskList->addTask("Belanja");
        
        $tasksAfterAdd = $taskList->getTasks();
        $this->assertContains("Belanja", $tasksAfterAdd);
    }

    public function testRemoveTask()
    {
        $taskList = new TaskList();

        // Remove task from an empty list
        $taskList->removeTask("Belanja");
        $this->assertEmpty($taskList->getTasks());

        $taskList->addTask("Belanja");
        $taskList->addTask("Jalan-jalan");

        // Remove an existing task
        $taskList->removeTask("Belanja");
        $this->assertContains("Jalan-jalan", $taskList->getTasks());

        // Remove a task that does not exist
        $taskList->removeTask("Mencuci Mobil");
        $this->assertNotContains("Mencuci Mobil", $taskList->getTasks());
    }
}