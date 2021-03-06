<?php
namespace App\Traits;

use App\Models\ScriptTag;
use App\Models\Store;

trait StoreTrait
{
    public function createScriptTag($data)
    {
        return $this->api()->rest('POST', '/admin/api/script_tags.json', $data);
    }
    public function readScriptTag()
    {
        return $this->api()->rest('GET', '/admin/api/script_tags.json');
    }
    public function deleteScriptTag($script_tag_id)
    {
        return $this->api()->rest('DELETE', "/admin/api/script_tags/{$script_tag_id}.json");
    }

    public function script_tags()
    {
        return $this->hasMany(ScriptTag::class,"shopify_url","name");
    }
    public function store()
    {
        return $this->hasOne(Store::class, "shopify_url", "name");
    }
}
