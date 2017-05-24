<?php

namespace Craft;

class Out_ReportModel extends BaseElementModel
{

	protected $elementType = "Out_Report";

	protected function defineAttributes ()
	{
		return array_merge(
			parent::defineAttributes(),
			[
				"mapping"        => [AttributeType::Mixed, "required" => true],
				"channelId"      => [AttributeType::Number, "required" => true],
				"typeId"         => [AttributeType::Number, "required" => true],
				"query"          => AttributeType::String,
				"startDate"      => AttributeType::DateTime,
				"endDate"        => AttributeType::DateTime,
				"lastDownloaded" => AttributeType::DateTime,
			]
		);
	}

	public function isEditable ()
	{
		return true;
	}

	public function getCpEditUrl ()
	{
		return UrlHelper::getCpUrl('out/' . $this->id);
	}

}