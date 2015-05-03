<?php

	function dropdown($cat){
		$form = Form::select('category', [$cat->id]);
		return $form;
	}