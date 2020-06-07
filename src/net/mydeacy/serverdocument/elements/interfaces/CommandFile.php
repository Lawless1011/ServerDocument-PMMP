<?php

namespace net\mydeacy\serverdocument\elements\interfaces;

interface CommandFile extends Element {

	const BUTTON_IMAGE = "textures/blocks/enchanting_table_top.png";

	/**
	 * @return string
	 */
	function getCommand() :string;
}
