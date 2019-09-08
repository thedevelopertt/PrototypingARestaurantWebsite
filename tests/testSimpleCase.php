<?php

class SimpleTest extends WP_UnitTestCase {

	public function test_sample() {

		$info = new \App\BlogInformation;

		$this->assertEquals('Test Blog',$info->getBlogName());
		$this->assertGreaterThan(0,strlen($info->getBlogDescription()));
		echo $info->getBlogDescription();
	}
}
