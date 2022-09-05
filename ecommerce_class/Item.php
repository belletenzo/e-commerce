<?php
class Item
{
    private string $name;
    private int $id;
    private ?string $description;
    private float $price;
    private string $imageUrl;
    private float $weight;
    private int $stock;
    private bool $available;

    public function __construct(array $item)
    {
        $this->name = $item['name'];
        $this->id = $item['id'];
        $this->description = $item['description'];
        $this->price = $item['price'];
        $this->imageUrl = $item['image'];
        $this->weight = $item['weight'];
        $this->stock = $item['quantity'];
        $this->available = $item['available'];
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float|mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @param float|mixed $price
     */
    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed|string
     */
    public function getImageUrl(): mixed
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed|string $imageUrl
     */
    public function setImageUrl(mixed $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return float|mixed
     */
    public function getWeight(): mixed
    {
        return $this->weight;
    }

    /**
     * @param float|mixed $weight
     */
    public function setWeight(mixed $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int|mixed
     */
    public function getStock(): mixed
    {
        return $this->stock;
    }

    /**
     * @param int|mixed $stock
     */
    public function setStock(mixed $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return bool|mixed
     */
    public function getAvailable(): mixed
    {
        return $this->available;
    }

    /**
     * @param bool|mixed $available
     */
    public function setAvailable(mixed $available): void
    {
        $this->available = $available;
    }
}