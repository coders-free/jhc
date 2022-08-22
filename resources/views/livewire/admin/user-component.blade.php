<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Usuarios
        </h2>
    </x-slot>
    
    <div class="container py-10">
    
    </div>

    <x-table-responsive>

        <div class="px-6 py-4">
 
            <x-jet-input type="text" wire:model="search" class="w-full" placeholder="Ingrese el nombre o correo de un usuario" />
        </div>
            @if (count($users))
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Id
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Rol
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Editar</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                    
                
                <tr wire:key="{{$user->email}}">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                            {{$user->id}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div  class=" text-gray-900">
                        {{$user->name}}
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div  class="text-sm text-gray-900">
                            {{$user->email}}
                        </div>
                    
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div  class="text-sm text-gray-900">
                            

                                @switch($user->roles->count())
                                    @case(1) 
                                    
                                    
                                
                                {{$user->roles->count()}} 
                                                    
                            
                                        @break
                                    @case(2)              
                                    {{$user->roles->count()}}
                                        @break
                                    @case(3)                    
                                    {{$user->roles->count()}}            
                                        @break
                                    @case(4)
                                    {{$user->roles->count()}}                     
                                        @break
                                    @default
                                    Sin Role
                                        @break
                                @endswitch
                    
                    
                
                    
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <label >
                            <input {{count($user->roles) ? 'checked' : ''}} value="1" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                            Si
                        </label>
                        <label class="ml-2">
                            <input {{count($user->roles) ? '' : 'checked'}} value="0" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                          No
                        </label>
                    </td>
                </tr>
                @endforeach 
                <!-- More people... -->

            
                </tbody>
            </table> 
            @else
                <div class="px-6 py-4">
                        No hay ningun registro coincidente
                </div>
            @endif
      


        @if ($users->hasPages())
        <div class="px-6 py-4 ">
            {{$users->links()}}
        </div>
        @endif
    </x-table-responsive>

</div>
