<x-session-status class="mb-4" :status="session('status')" />
                   <x-input-error class="mb-4" :messages="$errors->get('body')"/>
                   
                   <form action="{{route('posts.store') }}"method="POST">
                   Formulario
                   @csrf
                   <div class="mt-4">
                   <x-input-label for="body" :value="__('Body')" />
                   <x-textarea class="block mt-1 w-full"  name="body" />
                   </div>

                   <div class="flex items-center justify-end mt-4">           
                        <x-primary-button>
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>

                   </form> 