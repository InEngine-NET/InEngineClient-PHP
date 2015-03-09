<?php
/**
 * @author  Ethan Hann <ethanhann@gmail.com>
 * @license For the full copyright and license information, please view the LICENSE
 *          file that was distributed with this source code.
 */

namespace Eeh\Component\InEngineModel;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CronTrigger
{
    /**
     * @Type("integer")
     * @SerializedName("Id")
     */
    private $id;
    /**
     * @Type("string")
     * @SerializedName("JobType")
     */
    private $jobType;
    /**
     * @Type("string")
     * @SerializedName("CronExpressionString")
     */
    private $cronExpressionString;
    /**
     * @Type("integer")
     * @SerializedName("StateId")
     */
    private $stateId;
    /**
     * @Type("array<K, V>")
     * @SerializedName("Parameters")
     */
    private $parameters;
    /**
     * @Type("string")
     * @SerializedName("CronExpressionDescription")
     */
    private $cronExpressionDescription;
    /**
     * @Type("string")
     * @SerializedName("StateDescription")
     */
    private $stateDescription;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * @param mixed $jobType
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
    }

    /**
     * @return mixed
     */
    public function getCronExpressionString()
    {
        return $this->cronExpressionString;
    }

    /**
     * @param mixed $cronExpressionString
     */
    public function setCronExpressionString($cronExpressionString)
    {
        $this->cronExpressionString = $cronExpressionString;
    }

    /**
     * @return mixed
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param mixed $stateId
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param mixed $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getCronExpressionDescription()
    {
        return $this->cronExpressionDescription;
    }

    /**
     * @param mixed $cronExpressionDescription
     */
    public function setCronExpressionDescription($cronExpressionDescription)
    {
        $this->cronExpressionDescription = $cronExpressionDescription;
    }

    /**
     * @return mixed
     */
    public function getStateDescription()
    {
        return $this->stateDescription;
    }

    /**
     * @param mixed $stateDescription
     */
    public function setStateDescription($stateDescription)
    {
        $this->stateDescription = $stateDescription;
    }


}
