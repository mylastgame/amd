<?php
namespace App\Domain\Context\User\VO;
use App\Domain\Context\User\VO\Phone;
use App\Domain\Context\User\Exceptions\DuplicateValueException;
class PhonesList
{
    /**
     * @var Phone[]
     */
    private $phones = [];

    public function __construct(array $phones)
    {
        foreach ($phones as $phone) {
            $this->addPhone($phone);
        }
    }

    public function addPhone(Phone $newPhone)
    {
        foreach ($this->phones as $phone) {
            if ($phone->isEqual($newPhone)) {
                throw new DuplicateValueException($newPhone->getNumber(),self::class);
            }
        }

        $this->phones[] = $newPhone;
        return $this;
    }

    /**
     * @return Phone[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }


}