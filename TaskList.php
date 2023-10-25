<?php

class TaskList
{
    private $tasks = [];

    public function addTask($task)
    {
        $this->tasks[] = $task;
    }

    public function removeTask($task)
    {
        $key = array_search($task, $this->tasks);
        if ($key !== false) {
            unset($this->tasks[$key]);
        }
    }

    public function getTasks()
    {
        return $this->tasks;
    }
}