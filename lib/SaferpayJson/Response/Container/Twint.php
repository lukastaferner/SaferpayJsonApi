<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Twint
{
    /**
     * @SerializedName("CertificateExpirationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $certificateExpirationDate = null;

    public function getCertificateExpirationDate(): ?\DateTime
    {
        return $this->certificateExpirationDate;
    }
}
