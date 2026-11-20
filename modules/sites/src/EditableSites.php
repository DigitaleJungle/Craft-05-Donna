<?php

namespace modules\sites\src;

use craft\services\Sites as BaseSites;

/**
 * Overrides the `sites` service so disabled sites never appear in CP
 * site switchers (entry edit page, element indexes, global nav), even
 * though Craft normally includes disabled sites there for logged-in
 * CP users.
 */
class EditableSites extends BaseSites
{
    public function getEditableSiteIds(): array
    {
        return array_values(array_filter(
            parent::getEditableSiteIds(),
            fn(int $siteId) => $this->getSiteById($siteId, true)?->getEnabled() ?? false,
        ));
    }
}
