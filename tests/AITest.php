<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Other(): void
    {
        $result = AI::getGender('สวัสดีจ้า');
        $expected_result = 'Unknown';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::getSentiment('ดีใจ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Negative(): void
    {
        $result = AI::getSentiment('เสียใจ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Neutral(): void
    {
        $result = AI::getSentiment('เบื่อ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Neutral2(): void
    {
        $result = AI::getSentiment('Bored');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }


    public function testRudeWords_rude(): void
    {
        $result = AI::getRudeWords('สัส');
        $expected_result = ['มีคำหยาบ'];
        $this->assertEquals($expected_result, $result);
    }

    public function testRudeWords_notrude(): void
    {
        $result = AI::getRudeWords('ไร');
        $expected_result = ['ไม่มีคำหยาบ'];
        $this->assertEquals($expected_result, $result);
    }


    public function testLanguages_TH(): void
    {
        $result = AI::getLanguages('พี่ก๊อส');
        $expected_result = ['TH'];
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguages_TH2(): void
    {
        $result = AI::getLanguages('สัส');
        $expected_result = ['TH'];
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguages_EN(): void
    {
        $result = AI::getLanguages('sunsunnp');
        $expected_result = ['EN'];
        $this->assertEquals($expected_result, $result);
    }






}