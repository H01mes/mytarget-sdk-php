<?php

namespace Koma136\MyTarget\Domain\V1\Banner;

use Koma136\MyTarget\Domain\V1\Campaign\Campaign;
use Koma136\MyTarget\Domain\V1\Image\Image;
use Koma136\MyTarget\Domain\V2\Creative;
use Koma136\MyTarget\Domain\V1\User;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V1\Enum\Status;
use Koma136\MyTarget\Domain\V1\Enum\ModerationStatus;
use Koma136\MyTarget as f;

class Banner
{
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;

    /**
     * @var Status
     * @Field(name="status", type="Koma136\MyTarget\Domain\V1\Enum\Status")
     */
    private $status;

    /**
     * @var Status
     * @Field(name="system_status", type="Koma136\MyTarget\Domain\V1\Enum\Status")
     */
    private $systemStatus;

    /**
     * @var \DateTimeImmutable
     * @Field(name="created", type="DateTime")
     */
    private $created;

    /**
     * @var \DateTimeImmutable
     * @Field(name="updated", type="DateTime")
     */
    private $updated;

    /**
     * @var ModerationStatus
     * @Field(name="moderation_status", type="Koma136\MyTarget\Domain\V1\Enum\ModerationStatus")
     */
    private $moderationStatus;

    /**
     * @var string
     * @Field(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     * @Field(name="text", type="string")
     */
    private $text;

    /**
     * @var string
     * @Field(name="telephone", type="string")
     */
    private $telephone;

    /**
     * @var string
     * @Field(name="company_name", type="string")
     */
    private $companyName;

    /**
     * @var string
     * @Field(name="url", type="string")
     */
    private $url;

    /**
     * @var string[]
     * @Field(name="url_types", type="array<string>")
     */
    private $urlTypes;

    /**
     * @var string
     * @Field(name="json_url", type="string")
     */
    private $jsonUrl;

    /**
     * @var string
     * @Field(name="edit_url", type="string")
     */
    private $editUrl;

    /**
     * @var string
     * @Field(name="preview_image_url", type="string")
     */
    private $previewImageUrl;

    /**
     * @var User
     * @Field(name="user", type="Koma136\MyTarget\Domain\V1\User")
     */
    private $user;

    /**
     * @var Campaign
     * @Field(name="campaign", type="Koma136\MyTarget\Domain\V1\Campaign\Campaign")
     */
    private $campaign;

    /**
     * @var string
     * @Field(name="category", type="string")
     */
    private $category;

    /**
     * @var string
     * @Field(name="moderation_reason_display", type="string")
     */
    private $moderationReasonDisplay;

    /**
     * @var string
     * @Field(name="moderation_reasons_display", type="array<string>")
     */
    private $moderationReasonsDisplay;

    /**
     * @var BannerModeration
     * @Field(name="banner_moderation", type="Koma136\MyTarget\Domain\V1\Banner\BannerModeration")
     */
    private $bannerModeration;

    /**
     * @var string
     * @Field(name="automoderation_reason_display", type="string")
     */
    private $automoderationReasonDisplay;

    /**
     * @var Image
     * @Field(name="image", type="Koma136\MyTarget\Domain\V1\Image\Image")
     */
    private $image;

    /**
     * @var Creative[]
     * @Field(type="dict<Koma136\MyTarget\Domain\V2\Creative>")
     */
    private $content;

    /**
     * @var string
     * @Field(name="url_object_id", type="string")
     */
    private $urlObjectId;

    /**
     * @var Image
     * @Field(name="promo_image", type="Koma136\MyTarget\Domain\V1\Image\Image")
     */
    private $promoImage;

    /**
     * @var Image
     * @Field(name="vk_feed", type="Koma136\MyTarget\Domain\V1\Image\Image")
     */
    private $vkFeed;

    /**
     * @var Image
     * @Field(name="background_image", type="Koma136\MyTarget\Domain\V1\Image\Image")
     */
    private $backgroundImage;

    /**
     * @var Html
     * @Field(name="html5", type="Koma136\MyTarget\Domain\V1\Banner\Html")
     */
    private $html5;

    /**
     * @var VideoParams
     * @Field(name="video_params", type="Koma136\MyTarget\Domain\V1\Banner\VideoParams")
     */
    private $videoParams;

    /**
     * @var Products
     * @Field(name="products", type="Koma136\MyTarget\Domain\V1\Banner\Products")
     */
    private $products;

    /**
     * @var string[]
     * @Field(name="banner_fields", type="array<string>")
     */
    private $bannerFields;

    /**
     * @var mixed
     * @Field(name="links", type="mixed")
     */
    private $links;

    /**
     * @var mixed
     * @Field(name="pixels", type="mixed")
     */
    private $pixels;

    /**
     * @var string
     * @Field(name="deeplink", type="string")
     */
    private $deeplink;

    /**
     * @var string
     * @Field(name="call_to_action", type="string")
     */
    private $callToAction;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getSystemStatus()
    {
        return $this->systemStatus;
    }

    /**
     * @param Status $systemStatus
     */
    public function setSystemStatus($systemStatus)
    {
        $this->systemStatus = $systemStatus;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTimeInterface $created
     */
    public function setCreated(\DateTimeInterface $created)
    {
        $this->created = f\date_immutable($created);
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated)
    {
        $this->updated = f\date_immutable($updated);
    }

    /**
     * @return ModerationStatus
     */
    public function getModerationStatus()
    {
        return $this->moderationStatus;
    }

    /**
     * @param ModerationStatus $moderationStatus
     */
    public function setModerationStatus($moderationStatus)
    {
        $this->moderationStatus = $moderationStatus;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return \string[]
     */
    public function getUrlTypes()
    {
        return $this->urlTypes;
    }

    /**
     * @param \string[] $urlTypes
     */
    public function setUrlTypes($urlTypes)
    {
        $this->urlTypes = $urlTypes;
    }

    /**
     * @return string
     */
    public function getJsonUrl()
    {
        return $this->jsonUrl;
    }

    /**
     * @param string $jsonUrl
     */
    public function setJsonUrl($jsonUrl)
    {
        $this->jsonUrl = $jsonUrl;
    }

    /**
     * @return string
     */
    public function getEditUrl()
    {
        return $this->editUrl;
    }

    /**
     * @param string $editUrl
     */
    public function setEditUrl($editUrl)
    {
        $this->editUrl = $editUrl;
    }

    /**
     * @return string
     */
    public function getPreviewImageUrl()
    {
        return $this->previewImageUrl;
    }

    /**
     * @param string $previewImageUrl
     */
    public function setPreviewImageUrl($previewImageUrl)
    {
        $this->previewImageUrl = $previewImageUrl;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getModerationReasonDisplay()
    {
        return $this->moderationReasonDisplay;
    }

    /**
     * @param string $moderationReasonDisplay
     */
    public function setModerationReasonDisplay($moderationReasonDisplay)
    {
        $this->moderationReasonDisplay = $moderationReasonDisplay;
    }

    /**
     * @return string
     */
    public function getModerationReasonsDisplay()
    {
        return $this->moderationReasonsDisplay;
    }

    /**
     * @param string $moderationReasonsDisplay
     */
    public function setModerationReasonsDisplay($moderationReasonsDisplay)
    {
        $this->moderationReasonsDisplay = $moderationReasonsDisplay;
    }

    /**
     * @return BannerModeration
     */
    public function getBannerModeration()
    {
        return $this->bannerModeration;
    }

    /**
     * @param BannerModeration $bannerModeration
     */
    public function setBannerModeration($bannerModeration)
    {
        $this->bannerModeration = $bannerModeration;
    }

    /**
     * @return string
     */
    public function getAutomoderationReasonDisplay()
    {
        return $this->automoderationReasonDisplay;
    }

    /**
     * @param string $automoderationReasonDisplay
     */
    public function setAutomoderationReasonDisplay($automoderationReasonDisplay)
    {
        $this->automoderationReasonDisplay = $automoderationReasonDisplay;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getUrlObjectId()
    {
        return $this->urlObjectId;
    }

    /**
     * @param string $urlObjectId
     */
    public function setUrlObjectId($urlObjectId)
    {
        $this->urlObjectId = $urlObjectId;
    }

    /**
     * @return Image
     */
    public function getPromoImage()
    {
        return $this->promoImage;
    }

    /**
     * @param Image $promoImage
     */
    public function setPromoImage($promoImage)
    {
        $this->promoImage = $promoImage;
    }

    /**
     * @return Image
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * @param Image $backgroundImage
     */
    public function setBackgroundImage($backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return Html
     */
    public function getHtml5()
    {
        return $this->html5;
    }

    /**
     * @param Html $html5
     */
    public function setHtml5($html5)
    {
        $this->html5 = $html5;
    }

    /**
     * @return VideoParams
     */
    public function getVideoParams()
    {
        return $this->videoParams;
    }

    /**
     * @param VideoParams $videoParams
     */
    public function setVideoParams($videoParams)
    {
        $this->videoParams = $videoParams;
    }

    /**
     * @return Products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Products $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return \string[]
     */
    public function getBannerFields()
    {
        return $this->bannerFields;
    }

    /**
     * @param \string[] $bannerFields
     */
    public function setBannerFields($bannerFields)
    {
        $this->bannerFields = $bannerFields;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getPixels()
    {
        return $this->pixels;
    }

    /**
     * @param mixed $pixels
     */
    public function setPixels($pixels)
    {
        $this->pixels = $pixels;
    }

    /**
     * @return string
     */
    public function getDeeplink()
    {
        return $this->deeplink;
    }

    /**
     * @param string $deeplink
     */
    public function setDeeplink($deeplink)
    {
        $this->deeplink = $deeplink;
    }

    /**
     * @return string
     */
    public function getCallToAction()
    {
        return $this->callToAction;
    }

    /**
     * @param string $callToAction
     */
    public function setCallToAction($callToAction)
    {
        $this->callToAction = $callToAction;
    }

    /**
     * @return Creative[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Creative[] $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return Image
     */
    public function getVkFeed()
    {
        return $this->vkFeed;
    }

    /**
     * @param Image $vkFeed
     *
     * @return self
     */
    public function setVkFeed($vkFeed)
    {
        $this->vkFeed = $vkFeed;

        return $this;
    }
}
