<?php declare(strict_types=1);

namespace Shopware\Core\System\Currency\SalesChannel;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;

/**
 * This route can be used to load all currencies of the authenticated sales channel.
 * With this route it is also possible to send the standard API parameters such as: 'page', 'limit', 'filter', etc.
 */
abstract class AbstractCurrencyRoute
{
    abstract public function getDecorated(): AbstractCurrencyRoute;

    /**
     * @param Criteria $criteria - Will be implemented in tag:v6.4.0, can already be used
     */
    abstract public function load(Request $request, SalesChannelContext $context/*, Criteria $criteria*/): CurrencyRouteResponse;
}