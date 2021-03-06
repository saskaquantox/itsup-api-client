<?php

/*
 * Copyright 2016 SCTR Services
 *
 * Distribution and reproduction are prohibited.
 *
 * @package     itsup-api-client
 * @copyright   SCTR Services LLC 2016
 * @license     No License (Proprietary)
 */

namespace Itsup\Api\Model;

use Itsup\Api\Annotation\Transform;

/**
 * @author Cyril LEGRAND <cyril@sctr.net>
 *
 * @method int getId()
 * @method Account getAccount()
 * @method string getName()
 * @method int getNbAdZones()
 * @method int getNbOffers()
 * @method int getNbCampaigns()
 * @method int getNbCreatives()
 * @method setId(int $id)
 * @method setAccount(Account $account)
 * @method setName(string $name)
 * @method setNbAdZones(int $nbAdZones)
 * @method setOffers(int $nbOffers)
 * @method setNbCampaigns(int $nbCampaigns)
 * @method setCreatives(int $nbCreatives)
 */
class Tag extends AbstractModel
{
    /**
     * @var int
     * @Transform("int")
     */
    public $id;

    /**
     * @var Account
     * @Transform("class", class="Itsup\Api\Model\Account")
     */
    public $account;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     * @Transform("int")
     */
    public $nbAdZones;

    /**
     * @var int
     * @Transform("int")
     */
    public $nbOffers;

    /**
     * @var int
     * @Transform("int")
     */
    public $nbCampaigns;

    /**
     * @var int
     * @Transform("int")
     */
    public $nbCreatives;
}
