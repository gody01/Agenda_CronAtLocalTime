<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Handling cron jobs
 */
namespace Agenda\CronAtLocalTime\Observer;

/**
 * The observer for processing cron jobs.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ProcessCronQueueObserver extends \Magento\Cron\Observer\ProcessCronQueueObserver
{
    /**
     * return currentTime
    **/
    public function getCurrentTime ()
    {
        return $this->dateTime->gmtTimestamp() + $this->dateTime->getGmtOffset();
    }

}
