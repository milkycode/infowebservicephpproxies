<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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