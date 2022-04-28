<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RiskFactors
{
    const DELIVERY_TYPE_EMAIL = "EMAIL";
    const DELIVERY_TYPE_SHOP = "SHOP";
    const DELIVERY_TYPE_HOMEDELIVERY = "HOMEDELIVERY";
    const DELIVERY_TYPE_PICKUP = "PICKUP";
    const DELIVERY_TYPE_HQ = "HQ";

    /**
     * @var string|null
     * @SerializedName("DeliveryType")
     */
    private $deliveryType;

    /**
     * @var PayerProfile|null
     * @SerializedName("PayerProfile")
     */
    private $payerProfile;

    /**
     * @var Order|null
     * @SerializedName("Order")
     */
    private $order;


    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }


    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * @return PayerProfile|null
     */
    public function getPayerProfile(): ?PayerProfile
    {
        return $this->payerProfile;
    }

    /**
     * @param PayerProfile|null $payerProfile
     * @return RiskFactors
     */
    public function setPayerProfile(?PayerProfile $payerProfile): self
    {
        $this->payerProfile = $payerProfile;

        return $this;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * @param Order|null $order
     * @return RiskFactors
     */
    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }
}
