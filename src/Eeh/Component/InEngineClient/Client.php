<?php

/**
 * @author  Ethan Hann <ethanhann@gmail.com>
 * @license For the full copyright and license information, please view the LICENSE
 *          file that was distributed with this source code.
 */

namespace Eeh\Component\InEngineClient;

class Client
{
    public $guzzleClient;
    public $serializer;

    function __construct(\GuzzleHttp\Client $guzzleClient, \JMS\Serializer\Serializer $serializer)
    {
        $this->guzzleClient = $guzzleClient;
        $this->serializer = $serializer;
    }

    /**
     * Query for a list of cron triggers.
     *
     * @return mixed
     */
    public function getCronTriggers()
    {
        $response = $this->guzzleClient->get('http://localhost:9001/api/CronTrigger');
        $body = (string)$response->getBody();
//      $ret = $this->serializer->deserialize((string)$response->getBody(), 'ArrayCollection<Eeh\Component\InEngineModel\CronTrigger>', 'json');
//        $ret2 = $this->serializer->deserialize((string)$response->getBody(), 'array<Eeh\Component\InEngineModel\CronTrigger>', 'json');
        $ret = $this->serializer->deserialize((string)$response->getBody(), 'array<Eeh\Component\InEngineModel\CronTrigger>', 'json');
        return $ret;
    }

    /**
     * Query for a list of simple triggers.
     *
     * @return mixed
     */
    public function getSimpleTriggers()
    {
        $response = $this->guzzleClient->get('http://localhost:9001/api/SimpleTrigger');
        $ret = $this->serializer->deserialize((string)$response->getBody(), 'array<Eeh\Component\InEngineModel\SimpleTrigger>', 'json');
        return $ret;
    }

//    /**
//     * Delete a cron trigger.
//     *
//     * @param trigger
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.deleteCronTrigger = function (trigger) {
//    return this.resources.cronTriggers.remove(trigger).$promise;
//};
//
//    /**
//     * Pause a trigger given a trigger resource.
//     * Use the pauseCronTrigger or pauseSimpleTrigger methods instead.
//     *
//     * @param trigger
//     * @param triggerResource
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype._pauseTrigger = function (trigger, triggerResource) {
//    var request = angular.copy(trigger);
//    request.stateId = +(!request.stateId);
//    return triggerResource.update({id: trigger.id}, request).$promise;
//    };
//
//    /**
//     * Pause a cron trigger.
//     *
//     * @param trigger
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.pauseCronTrigger = function (trigger) {
//    return this._pauseTrigger(trigger, this.resources['cronTriggers']);
//    };
//
//    /**
//     * Pause a simple trigger.
//     *
//     * @param trigger
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.pauseSimpleTrigger = function (trigger) {
//    return this._pauseTrigger(trigger, this.resources['simpleTriggers']);
//    };
//
//    /**
//     * Query for a list of simple triggers.
//     *
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.getSimpleTriggers = function () {
//    return this.resources.simpleTriggers.query().$promise;
//};
//
//    /**
//     * Delete a simple trigger.
//     *
//     * @param trigger
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.deleteSimpleTrigger = function (trigger) {
//    return this.resources.simpleTriggers.remove(trigger).$promise;
//};
//
//    /**
//     * Query for a list of time zones.
//     *
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.getTimeZones = function () {
//    return this.resources.timeZones.query().$promise;
//};
//
//    /**
//     * Query for a list of available job types.
//     *
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.getJobTypes = function () {
//    return this.resources.jobTypes.query().$promise;
//};
//
//    /**
//     * Get the health status server resources.
//     *
//     * @returns {$promise|*}
//     */
//InEngineApi.prototype.getHealthStatus = function () {
//    return this.resources.healthStatus.get().$promise;
//};
}
