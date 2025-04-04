<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Enum_ArticleType
{
    const __default = 'aEmpty';

    const aEmpty = 'Empty';
    const Article = 'Article';
    const Expense = 'Expense';
    const Composed = 'Composed';
    const ProductionArticle = 'ProductionArticle';
    const Betterment = 'Betterment';
}