<x-layouts.app>
    <div class="flex flex-col space-y-6">
        <x-block title="Normal">
            <x-button.primary>
                Click me
            </x-button.primary>
            <x-button.secondary>
                Click me
            </x-button.secondary>
            <x-button.white>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Leading icon">
            <x-button.primary>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.primary>
            <x-button.secondary>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.secondary>
            <x-button.white>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Trailing icon">
            <x-button.primary>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.primary>
            <x-button.secondary>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.secondary>
            <x-button.white>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Just icon">
            <x-button.primary>
                <x-icon.envelope class="h-4 w-4" />
            </x-button.primary>
            <x-button.secondary>
                <x-icon.envelope class="h-4 w-4" />
            </x-button.secondary>
            <x-button.white>
                <x-icon.envelope class="h-4 w-4" />
            </x-button.white>
        </x-block>
        <x-block title="Different sizes">
            <x-button.primary large>
                Click me
            </x-button.primary>
            <x-button.secondary medium>
                Click me
            </x-button.secondary>
            <x-button.white small>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Different sizes with trailing icons">
            <x-button.primary small>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.primary>
            <x-button.secondary medium>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.secondary>
            <x-button.white large>
                <x-slot:trailingIcon>
                    <x-icon.envelope />
                </x-slot:trailingIcon>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Different sizes with leading icons">
            <x-button.primary small>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.primary>
            <x-button.secondary medium>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.secondary>
            <x-button.white large>
                <x-slot:leadingIcon>
                    <x-icon.envelope />
                </x-slot:leadingIcon>
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Different types">
            <x-button.primary type="submit">
                Click me
            </x-button.primary>
            <x-button.secondary type="submit">
                Click me
            </x-button.secondary>
            <x-button.white type="submit">
                Click me
            </x-button.white>
        </x-block>
        <x-block title="Override classes">
            <x-button.primary class="bg-red-400">
                Click me
            </x-button.primary>
            <x-button.secondary class="bg-green-200 hover:bg-green-700 text-black">
                Click me
            </x-button.secondary>
            <x-button.white class="border-0">
                Click me
            </x-button.white>
        </x-block>
    </div>
</x-layouts.app>
