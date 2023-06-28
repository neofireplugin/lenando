<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckunze
 * Date: 23/2/17
 * Time: 12:10
 */

namespace Schuhe24\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

/**
 * Class Settings
 *
 * @property int $id
 * @property int $plentyId
 * @property string $lang
 * @property string $name
 * @property string $value
 * @property string $updatedAt
 *
 * @Nullable(columns={"value"})
 */
class Settings extends Model
{

    public $id;
    public $plentyId;
    public $lang = '';
    public $name = '';
    public $value;
    public $updatedAt = '';

    const AVAILABLE_SETTINGS = array(
      "referrerId" => float
    );

    const AVAILABLE_LANGUAGES = array("de",
        "en",
        "bg",
        "fr",
        "it",
        "es",
        "tr",
        "nl",
        "pl",
        "pt",
        "nn",
        "da",
        "se",
        "cz",
        "ro",
        "ru",
        "sk",
        "cn",
        "vn");

    const LANG_INDEPENDENT_SETTINGS = array(
      "referrerId
    );

    const DEFAULT_LANGUAGE = "de";

    const MODEL_NAMESPACE = 'Schuhe24\Models\Settings';

    const SETTINGS_DEFAULT_VALUES = array();

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return 'Schuhe24::settings';
    }
}

?>
