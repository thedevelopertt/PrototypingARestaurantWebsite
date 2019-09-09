<?php

class SimpleTest extends WP_UnitTestCase {

	public function test_sample() {

		$info = new \App\BlogInformation;

		$this->assertEquals('Test Blog',$info->getBlogName());
		echo $info->getBlogName();

		$this->assertGreaterThan(0,strlen($info->getBlogDescription()));
		echo $info->getBlogDescription();

		if(strlen($info->getBlogFaviconUrl()) != 0)
			$this->assertFileExists($info->getBlogFaviconUrl());
		else
			$this->assertEquals("",$info->getBlogFaviconUrl());
	}
}
