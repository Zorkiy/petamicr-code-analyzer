<?php

namespace Petamicr\CodeAnalyzer;

/**
 *
 */
class DocumentationConfig
{
	/**
	 *
	 */
	private string $projectPath;

	/**
	 *
	 */
	private string $outputPath;

	/**
	 *
	 */
	private array $ignoredPaths;

	/**
     * Конструктор класу DocumentationConfig.
     *
     * Ініціалізує об'єкт конфігурації для аналізатора коду.
     *
     * @param string $projectPath Шлях до кореневої директорії проєкту, який потрібно аналізувати.
     * @param string $outputPath Шлях до файлу, куди буде збережено результат аналізу (документація).
     * @param array $ignoredPaths Масив шляхів (файлів або директорій), які потрібно ігнорувати під час аналізу. За замовчуванням - порожній масив.
     */
    public function __construct(string $projectPath, string $outputPath, array $ignoredPaths = [])
    {
        $this->projectPath = $projectPath;
        $this->outputPath = $outputPath;
        $this->ignoredPaths = $ignoredPaths;
    }

	/**
     * Повертає шлях до кореневої директорії проєкту.
     *
     * @return string Шлях до кореневої директорії проєкту.
     */
    public function getProjectPath(): string
    {
        return $this->projectPath;
    }

    /**
     * Повертає шлях до вихідного файлу для збереження документації.
     *
     * @return string Шлях до вихідного файлу.
     */
    public function getOutputPath(): string
    {
        return $this->outputPath;
    }

    /**
     * Повертає масив шляхів, які потрібно ігнорувати під час аналізу.
     *
     * @return array Масив ігнорованих шляхів (файлів або директорій).
     */
    public function getIgnoredPaths(): array
    {
        return $this->ignoredPaths;
    }

    /**
     * Додає шлях до списку шляхів, які потрібно ігнорувати.
     *
     * @param string $path Шлях (файл або директорія), який потрібно додати до списку ігнорування.
     */
    public function addIgnoredPath(string $path): void
    {
        // Можна додати перевірку на унікальність, але за замовчуванням просто додаємо
        $this->ignoredPaths[] = $path;
    }
}
