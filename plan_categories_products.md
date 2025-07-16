Documento Técnico – Implementação de Recursos: Categorias e Produtos

Metodologia Aplicada: PREAC
Este documento segue a metodologia PREAC (Planejamento, Revisão, Execução, Avaliação, Critérios para Conclusão) como exigência para a padronização e controle de qualidade no desenvolvimento de novos recursos dentro do projeto.

1. PLANEJAMENTO
Objetivo
Implementar dois novos recursos no sistema:

Categorias: Cadastro, edição, remoção e listagem de categorias de produtos.

Produtos: Cadastro, edição, remoção, listagem e exibição de produtos vinculados a categorias.

Esses recursos serão exibidos no frontend para navegação pública, permitindo ao visitante visualizar todos os produtos e também navegar por categorias específicas de forma organizada.

Necessidades:
CRUD completo de categorias e produtos via painel administrativo.

Relacionamento 1:N entre Categoria -> Produtos.

Listagem pública de todos os produtos e também agrupados por categoria.

Manter a estrutura, arquitetura e convenções já aplicadas no recurso base page.

Requisitos Técnicos:
Backend: Laravel (mesma estrutura usada em page)

Frontend: Blade

Banco de dados: MySQL (usar migrations e seeders)

Permissões e policies: usamos o user_groups e permissions adicionando as routes que o grupo de usuário teria acesso e permissão para usar.

2. REVISÃO
Análise de Estrutura Existente
O recurso page possui os seguintes padrões:

Routes, Model, Migration, Controller, Views, pageCSS e pageJS, permissions.

Uso de rotas agrupadas por prefixo (ex: admin.pages, site.pages)

Integração com Blade para o painel admin

Campos padrão: title, slug, status, order, image, description

Adaptação esperada
Para Categorias:
Model: Category

Campos: id, title, slug, status, order, image, description, created_at, updated_at

Para Produtos:
Model: Product

Campos: id, category_id, title, slug, status, price, stock, image, description, created_at, updated_at

Relacionamento:

// Category.php
public function products() {
    return $this->hasMany(Product::class);
}

// Product.php
public function category() {
    return $this->belongsTo(Category::class);
}
3. EXECUÇÃO
Backend
Criar migrations com campos mencionados.

Criar modelos Category e Product com relações definidas.

Criar Grupo de Rotas no web.php para o acesso admin.

Criar Permissões para as rotas do admin e atualizar o group_permissions com as novas relações user_group_id e permission_id.

Criar Controllers dentro de admin (CategoryController, ProductController) baseados no PageController.

Criar Seeders para dados de teste contendo as categorias (naturais e compostas) e os produtos sendo Carvalho Vermelho, Nogueira Americana, Carvalho Branco, Carvalho europeu e Freijó.

Frontend (Painel Admin)
Replicar estrutura de visualização, formulário e gerenciamento usada em 'resources\views\admin\pages\pages'.

Listagem com filtros por status, ordenação e busca.

Formulário com campos já padronizados (input, textarea, upload de imagem, etc).

Frontend (Site Público)
Rota pública /produtos que exibe todos os produtos.
Rota pública /categorias que exibe todas as categorias.
Rota pública /produtos/categoria/{slug} que lista os produtos da categoria.

Componente de navegação com categorias em destaque ou sidebar.

4. AVALIAÇÃO
Antes de considerar a tarefa finalizada, deve-se validar automaticamente ou solicitar ao usuário para testar manualmente:

Funcionamento de todos os métodos CRUD no painel administrativo.

Exibição correta dos dados no frontend (todos e por categoria).

Relacionamento entre categorias e produtos operando corretamente.

Testes manuais cobrindo os principais fluxos:

Cadastrar categoria > Cadastrar produto vinculado > Listar no site

Excluir categoria (e verificar impacto nos produtos)

Validações de formulário e mensagens de erro

Seeders gerando dados de demonstração válidos.

5. CRITÉRIOS PARA CONCLUSÃO
A tarefa será considerada finalizada e pronta para entrega apenas se:

As migrations forem aplicadas sem erro e criem a estrutura correta.

Todas as rotas estejam protegidas por autenticação e permissões.

Os modelos e relacionamentos estejam funcionando conforme esperado.

Os componentes visuais (admin e site) estejam alinhados com o layout padrão.

Os dados estejam sendo exibidos de forma coerente na navegação pública.

A documentação técnica (README ou Wiki do projeto) estiver atualizada.

O código estiver versionado e mergeado na branch principal com PR revisado.