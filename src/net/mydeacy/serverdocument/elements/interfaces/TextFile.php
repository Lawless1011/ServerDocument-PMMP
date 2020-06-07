<?php

namespace net\mydeacy\serverdocument\elements\interfaces;

interface TextFile extends Element {

	const BUTTON_IMAGE = "textures/blocks/cartography_table_top.png";

	/**
	 * @return string
	 */
	function getContent() :string;
}
