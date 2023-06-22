<div class="items-center justify-center max-w-full pt-7 ">
    <div class="flex flex-col items-center justify-center m-auto">
        <div class="flex items-center gap-4 justify-center p-2 max-xl:flex-col max-sm:w-[360px]">
            <img class="object w-[500px] rounded-t-lg " src="./images/hub_frente.png" alt="">
            <div
                class="flex flex-col text-start w-[680px] max-md:w-full h-full items-start justify-start mt-4 p-2 leading-normal">
                <div class="flex gap-2 mb-3">
                    <div class="border-2 border-[#04DBFD] "></div>
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 m-">Sobre nós</h5>
                </div>

                <p class="justify-between mb-3 font-normal ">O objetivo do HUB Inova FEMA é oferecer aos
                    alunos, professores, pesquisadores e empresas um local físico compartilhado e privativo para que
                    esse
                    público possa <strong>trabalhar e desenvolver pesquisas</strong>, projetos, negócios, produtos,
                    serviços, dentre outras atividades que envolvam inovações, criatividade e troca de experiências.
                    <strong>Tudo isso com integração entre os cursos da FEMA</strong>, tendo como mentores professores e
                    profissionais.
                </p>
                <p class="mb-3 font-normal">Além disso, fazem parte das finalidades, a
                    realização de networking de nossos professores e alunos com as nossas parceiras, fomentando a
                    pesquisa, a inovação, bem como a realização de ações e atividades, como, cursos, treinamentos,
                    palestras, hackathons, sempre tendo como foco a Inovação.</p>
                <p class="mb-3 font-normal">O HUB Inova FEMA está <strong>localizado
                        dentro do campus da FEMA</strong>, ao lado da rotatória, próximo do Bloco 10.</p>
            </div>
        </div>

        <div id="parceiros" class="max-xl:w-[700px] w-[1250px] max-sm:w-[360px] flex flex-col pt-7">
            <div class="flex w-full gap-2 mb-3">
                <div class=" flex-start border-2 border-[#04DBFD] "></div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 ">Parceiros</h1>
            </div>
            <div class="mb-8 max-md:w-full">
                <p class="mb-2">São parcerias de cooperação acadêmico-científicas, com Empresas Privadas, Organizações
                    Públicas, Instituições de Ensino, Pesquisadores Autônomos, Institutos de Pesquisas, dentre outros.
                    As parcerias têm por finalidade a geração de novos produtos, serviços, negócios, startups, tendo
                    como origem, como base, os pilares do Ensino e da Pesquisa dos cursos de Graduação da FEMA.</p>
                <p>Além disso, fazem parte das finalidades, ações e atividades, como networking, cursos, treinamentos,
                    palestras, hackathons, sempre tendo como foco a Inovação.</p>
            </div>
            <div class="flex gap-4 overflow-x-scroll snap-center">
                @foreach($partners as $partner)
                    <div class="relative h-80 ">
                        <img class="object-scale-down max-w-sm mb-2 rounded-lg h-80" src="{{$partner->image}}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="max-xl:w-[700px] w-[1250px] max-sm:w-[360px] flex flex-col pt-7">
            <div id="imagens" class="flex w-full gap-2 p-4 mt-8 mb-8">
                <div class="border-2 border-[#04DBFD] "></div>
                <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Imagens</h5>
            </div>
            <div class="flex overflow-x-scroll snap-center">
                @foreach($images as $image)
                    <div class="relative h-80 ">
                        <img class="object-cover max-w-sm mb-2 ml-2 rounded-lg h-80 " src="{{$image->image}}"
                             alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


