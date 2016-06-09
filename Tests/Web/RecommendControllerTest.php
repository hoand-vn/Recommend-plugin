<?php
namespace Plugin\Recommend\Tests\Web;

use Eccube\Common\Constant;
use Eccube\Tests\Web\AbstractWebTestCase;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Created by PhpStorm.
 * User: Nguyen Dinh Hoa
 * Date: 6/6/2016
 * Time: 2:00 PM
 */
class RecommendControllerTest extends AbstractWebTestCase
{
    /**
     * please ensure have 1 or more order in database before testing
     */
    public function setUp()
    {
        parent::setUp();
    }

    public function testRecommendBlock()
    {
        $crawler = $this->client->request(
            'GET',
            $this->app->url('block_recommend_product_block')
        );

        $this->assertContains('<div id="item_list">', $crawler->html());
    }
}
