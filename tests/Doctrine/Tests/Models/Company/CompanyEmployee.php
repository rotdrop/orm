<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\Company;

use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 * @Table(name="company_employees")
 */
class CompanyEmployee extends CompanyPerson
{
    /**
     * @var int
     * @Column(type="integer")
     */
    private $salary;

    /**
     * @var string
     * @Column(type="string", length=255)
     */
    private $department;

    /**
     * @var DateTime|null
     * @Column(type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @psalm-var Collection<int, CompanyContract>
     * @ManyToMany(targetEntity="CompanyContract", mappedBy="engineers", fetch="EXTRA_LAZY")
     */
    public $contracts;

    /**
     * @psalm-var Collection<int, CompanyFlexUltraContract>
     * @OneToMany(targetEntity="CompanyFlexUltraContract", mappedBy="salesPerson", fetch="EXTRA_LAZY")
     */
    public $soldContracts;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($dep): void
    {
        $this->department = $dep;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($date): void
    {
        $this->startDate = $date;
    }
}
