<?php

/**
 * 🚨 Violation of Dependency Inversion Principle (DIP) (Bad Practice)
 * 
 * The ProjectManager class is tightly coupled to Developer and Designer.
 * If we need to add a new role (e.g., Marketer, QA Engineer), 
 * we must modify ProjectManager, breaking DIP.
 */

class Developer
{
    public function work()
    {
        echo "👨‍💻 Developer is coding\n";
    }
}

class Designer
{
    public function work()
    {
        echo "🎨 Designer is designing\n";
    }
}

class ProjectManager
{
    private Developer $developer;
    private Designer $designer;

    public function __construct()
    {
        $this->developer = new Developer();
        $this->designer = new Designer();
    }

    public function manageTeam()
    {
        $this->developer->work();
        $this->designer->work();
    }
}

// ❌ Problem: If we add a new role, we must modify ProjectManager, breaking DIP
$manager = new ProjectManager();
$manager->manageTeam();


/**
 * ✅ Correct Implementation of Dependency Inversion Principle (DIP) (Good Practice)
 * 
 * - ProjectManager depends on an abstraction (TeamMember interface) rather than concrete classes.
 * - We can add new roles (QA Engineer, Marketer, etc.) without modifying ProjectManager.
 */

// Define an interface for team members
interface TeamMember
{
    public function work(): void;
}

// Concrete team members implementing TeamMember interface
class DIPDeveloper implements TeamMember
{
    public function work(): void
    {
        echo "👨‍💻 Developer is coding\n";
    }
}

class DIPDesigner implements TeamMember
{
    public function work(): void
    {
        echo "🎨 Designer is designing\n";
    }
}

class QAEngineer implements TeamMember
{
    public function work(): void
    {
        echo "🛠️ QA Engineer is testing\n";
    }
}

// ProjectManager depends on abstraction (TeamMember) instead of concrete classes
class DIPProjectManager
{
    private array $teamMembers = [];

    /**
     * Add a team member to the project
     */
    public function addMember(TeamMember $member): void
    {
        $this->teamMembers[] = $member;
    }

    /**
     * Manage the team by calling work() for each member
     */
    public function manageTeam(): void
    {
        foreach ($this->teamMembers as $member) {
            $member->work();
        }
    }
}

// ✅ ProjectManager is now flexible and can manage any type of team member
$manager = new DIPProjectManager();
$manager->addMember(new DIPDeveloper());
$manager->addMember(new DIPDesigner());
$manager->addMember(new QAEngineer());

// Execute team tasks
$manager->manageTeam();
