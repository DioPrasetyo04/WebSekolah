<div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>

    @if (session()->has('message'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl flex items-start gap-3">
            <i data-lucide="check-circle" class="w-5 h-5 mt-0.5 flex-shrink-0"></i>
            <p>{{ session('message') }}</p>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                Full Name <span class="text-red-600">*</span>
            </label>
            <input 
                type="text" 
                id="name" 
                wire:model.live="name"
                class="w-full px-4 py-3 rounded-xl border @error('name') border-red-500 @else border-gray-200 @enderror focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none"
                placeholder="John Doe"
            >
            @error('name') 
                <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-4 h-4"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Email and Phone -->
        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    Email <span class="text-red-600">*</span>
                </label>
                <input 
                    type="email" 
                    id="email" 
                    wire:model.live="email"
                    class="w-full px-4 py-3 rounded-xl border @error('email') border-red-500 @else border-gray-200 @enderror focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none"
                    placeholder="john@example.com"
                >
                @error('email') 
                    <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                        <i data-lucide="alert-circle" class="w-4 h-4"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                    Phone
                </label>
                <input 
                    type="tel" 
                    id="phone" 
                    wire:model="phone"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none"
                    placeholder="+62 812 3456 7890"
                >
            </div>
        </div>

        <!-- Subject -->
        <div>
            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                Subject <span class="text-red-600">*</span>
            </label>
            <select 
                id="subject" 
                wire:model.live="subject"
                class="w-full px-4 py-3 rounded-xl border @error('subject') border-red-500 @else border-gray-200 @enderror focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none"
            >
                <option value="">Select a subject</option>
                <option value="admission">Admission Inquiry</option>
                <option value="general">General Information</option>
                <option value="program">Program Details</option>
                <option value="other">Other</option>
            </select>
            @error('subject') 
                <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-4 h-4"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                Message <span class="text-red-600">*</span>
            </label>
            <textarea 
                id="message" 
                wire:model.live="message"
                rows="5"
                class="w-full px-4 py-3 rounded-xl border @error('message') border-red-500 @else border-gray-200 @enderror focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none resize-none"
                placeholder="Tell us how we can help..."
            ></textarea>
            @error('message') 
                <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-4 h-4"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            wire:loading.attr="disabled"
            class="w-full flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl font-semibold text-lg shadow-xl hover:shadow-2xl hover:shadow-red-500/50 hover:scale-[1.02] hover:-translate-y-0.5 active:scale-[0.98] transition-all disabled:opacity-50 disabled:cursor-not-allowed"
        >
            <i data-lucide="send" class="w-5 h-5"></i>
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>
    @push('scripts')
    <script>
        document.addEventListener('livewire:init', function() {
            Livewire.hook('morph.updated', () => {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            });
        });
    </script>
    @endpush
</div>
