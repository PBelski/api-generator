<?php

namespace SoliDry\Helpers;


use SoliDry\Extension\JSONApiInterface;
use Illuminate\Http\Request as Req;
use SoliDry\Types\RoutesInterface;

/**
 * Class Request
 *
 * @package SoliDry\Helpers
 */
class Request
{
    /**
     * @param Req $request
     * @return array
     */
    public static function getSupportedExtensions(Req $request): array
    {
        $contentType = $request->header(JSONApiInterface::CONTENT_TYPE_KEY);
        if (mb_strpos($contentType, JSONApiInterface::EXT) === false) {
            return [];
        }

        [$i, $ext] = explode(';', $contentType);
        [$j, $supportedExt] = explode('=', $ext);

        return explode(',', trim($supportedExt, '"'));
    }

    /**
     * @param Req $request
     * @param string $ext
     * @return bool
     */
    public static function isExt(Req $request, string $ext): bool
    {
        $extensions = static::getSupportedExtensions($request);

        return \in_array($ext, $extensions, true);
    }

    /**
     * Returns base path of current url
     *
     * @example: https://example.com/api/v3/
     *
     * @return string
     */
    public function getBasePath(): string
    {
        $parsedUrl = parse_url(url()->current());
        $explodedPath = explode('/', $parsedUrl['path']);

        $baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
        if ($explodedPath[1] === RoutesInterface::ROUTES_FILE_NAME) {
            $baseUrl .= '/' . $explodedPath[1] . '/' . $explodedPath[2];
        } else {
            $baseUrl .= '/' . $explodedPath[1];
        }

        return $baseUrl;
    }
}