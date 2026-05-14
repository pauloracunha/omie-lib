<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Cadastro de contas a pagar.
 *
 * @pw_element integer $codigo_lancamento_omie Código do Lançamento de Contas a Pagar.<BR>Preenchimento automático na inclusão.<BR>Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Contas a Pagar mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.<BR>
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_element integer $codigo_cliente_fornecedor Código do Favorecido / Fornecedor.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
 * @pw_element string $codigo_cliente_fornecedor_integracao Código de Integração do Favorecido / Fornecedor.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente_omie".<BR>
 * @pw_element string $data_vencimento Data de Vencimento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da vencimento do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element decimal $valor_documento Valor da Conta.<BR>Preenchimento Obrigatório.
 * @pw_element string $codigo_categoria Código da Categoria
 * @pw_element categoriasArray $categorias Rateio de Categoria
 * @pw_element string $data_previsao Data da Previsão de Pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Caso não informado, assumirá a data de vencimento informada.<BR><BR>Esse campo indica a data da previsão do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element integer $id_conta_corrente Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá o padrão para o fornecedor. Caso não haja um padrão definido, retornará erro até que uma Conta Corrente válida seja informada.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_element string $numero_documento_fiscal Número da Nota Fiscal.
 * @pw_element string $data_emissao Data de Emissão.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
 * @pw_element string $data_entrada Data de Registro.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
 * @pw_element integer $codigo_projeto Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_element decimal $valor_pis Valor do PIS.
 * @pw_element string $retem_pis Reter PIS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_cofins Valor do PIS.
 * @pw_element string $retem_cofins Reter COFINS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_csll Valor CSLL.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.<BR>
 * @pw_element string $retem_csll Reter CSLL.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_ir Valor IR.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_ir Reter IR.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_iss Valor ISS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_iss Reter ISS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_inss Valor INSS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_inss Reter INSS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element distribuicaoArray $distribuicao Distribuição por Departamentos.<BR>Preenchimento Opcional.<BR><BR>
 * @pw_element string $numero_pedido Número do Pedido.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $codigo_tipo_documento Código do Tipo de Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $numero_documento Número do Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $numero_parcela Número da parcela.<BR>Preenchimento Opcional.<BR><BR>Utilizar o formato "999/999".<BR><BR>Para 1 parcela utilize "001/001"<BR><BR>Se não informado assumirá o valor "001/001".<BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>
 * @pw_element string $chave_nfe Chave da NF.e.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $codigo_barras_ficha_compensacao Código de Barras (de Cobrança Bancária, de Concessionária ou de Impostos)<BR><BR>Preenchimento obrigatório quando informado "BOL" no Código da Forma de Pagamento.<BR>
 * @pw_element integer $codigo_vendedor Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element string $id_origem Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>"APIP" - Integração de Conta a Pagar<BR>"BARP" - Conta a Pagar Importada por Código de Barras<BR>"COMP" - Parcela a Pagar de Compras<BR>"CTEP" - Parcela a Pagar de um CT-e<BR>"DEVP" - Conta a Pagar da Devolução de Venda<BR>"IMPP" - Parcela a Pagar de uma Nota de Importação<BR>"MANP" - Lançamento Manual de Conta a Pagar<BR>"NFEP" - Conta a Pagar Importada de uma NF-e<BR>"RPTP" - Repetição de Contas a Pagar<BR>"XMLP" - Conta a Pagar Importada de um arquivo XML
 * @pw_element info $info Informações sobre a criação/alteração do lançamento de Contas a Pagar.<BR>Preenchimento automático - Não informar.
 * @pw_element string $operacao Código da Operação. .<BR>Preenchimento Automático - Não preencher.<BR><BR>Esse campo indica qual tipo de operação está associada ao lançamento de Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>"01" - Venda de Serviço<BR>"11" - Venda de Produto<BR>"12" - Venda de Produto pelo PDV<BR>"13" - Devolução de Venda<BR>"14" - Remessa de Produto<BR>"16" - Nota Complementar de Saída
 * @pw_element string $status_titulo Status do Título.<BR>Preenchimento automático - Não informar.<BR><BR>Essa informação é retornada na consulta/pesquisa dos lançamentos de Contas a Pagar.
 * @pw_element string $nsu DEPRECATED.
 * @pw_element string $acao DEPRECATED
 * @pw_element string $id_conta_corrente_integracao DEPRECATED
 * @pw_element string $bloqueado DEPRECATED
 * @pw_element string $baixa_bloqueada DEPRECATED
 * @pw_element string $codigo_cmc7_cheque DEPRECATED
 * @pw_element string $importado_api Importado pela API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $bloquear_exclusao Bloqueia a exclusão do registro. (S/N)
 * @pw_element cnab_integracao_bancaria $cnab_integracao_bancaria Dados do CNAB e Integração Bancária.
 * @pw_element servico_tomado $servico_tomado Informações da aba de Serviço Tomado da Ordem de Serviço.
 * @pw_element decimal $valor_pag Valor a pagar.<BR><BR>Disponível apenas para os métodos de consulta e listagem.
 * @pw_element string $aprendizado_rateio Aprendizado de rateio de departamento.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Quando essa tag for preenchida com "S" será assumido o rateio de departamento para a categoria informada na tag "codigo_categoria".<BR><BR>Essa tag é utilizada apenas nos métodos de inclusão e alteração.
 * @pw_element string $baixar_documento Efetua a baixa automática do documento.
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente. Opcional.<BR><BR>Preencher com S/N.
 * @pw_element pagamento $pagamento Detalhes do pagamento(baixa).<BR>Informe aqui os detalhes do pagamento do lançamento.<BR><BR>Ao preencher esse campo é possível detalhar informações da baixa do documento, como: Valor pago, Desconto, Juros, Multa, etc.<BR>   <BR>Quando essa tag estiver preenchida é obrigatório o preenchimento da tag "baixar_documento" com "S" <BR><BR>Caso essa tag não seja preenchida o lançamento será baixado de forma integral de acordo com os valores do lançamento.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Informação localizada na Aba "Pagamentos" no cadastro do lançamento.<BR><BR>Preenchimento opcional.
 * @pw_complex conta_pagar_cadastro
 */
class Conta_pagar_cadastro{
	/**
	 * Código do Lançamento de Contas a Pagar.<BR>Preenchimento automático na inclusão.<BR>Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Contas a Pagar mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.<BR>
	 *
	 * @var integer
	 */
	public int $codigo_lancamento_omie;
	/**
	 * Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
	 *
	 * @var string
	 */
	public string $codigo_lancamento_integracao;
	/**
	 * Código do Favorecido / Fornecedor.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codigo_cliente_fornecedor;
	/**
	 * Código de Integração do Favorecido / Fornecedor.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente_omie".<BR>
	 *
	 * @var string
	 */
	public string $codigo_cliente_fornecedor_integracao;
	/**
	 * Data de Vencimento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da vencimento do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
	 *
	 * @var string
	 */
	public string $data_vencimento;
	/**
	 * Valor da Conta.<BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor_documento;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $codigo_categoria;
	/**
	 * Rateio de Categoria
	 *
	 * @var Categorias[]
	 */
	public array $categorias;
	/**
	 * Data da Previsão de Pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Caso não informado, assumirá a data de vencimento informada.<BR><BR>Esse campo indica a data da previsão do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
	 *
	 * @var string
	 */
	public string $data_previsao;
	/**
	 * Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá o padrão para o fornecedor. Caso não haja um padrão definido, retornará erro até que uma Conta Corrente válida seja informada.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $id_conta_corrente;
	/**
	 * Número da Nota Fiscal.
	 *
	 * @var string
	 */
	public string $numero_documento_fiscal;
	/**
	 * Data de Emissão.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $data_emissao;
	/**
	 * Data de Registro.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $data_entrada;
	/**
	 * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codigo_projeto;
	/**
	 * Observação da Baixa do Contas a Receber.
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $valor_pis;
	/**
	 * Reter PIS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_pis;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $valor_cofins;
	/**
	 * Reter COFINS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_cofins;
	/**
	 * Valor CSLL.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.<BR>
	 *
	 * @var decimal
	 */
	public float $valor_csll;
	/**
	 * Reter CSLL.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_csll;
	/**
	 * Valor IR.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var decimal
	 */
	public float $valor_ir;
	/**
	 * Reter IR.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_ir;
	/**
	 * Valor ISS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var decimal
	 */
	public float $valor_iss;
	/**
	 * Reter ISS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_iss;
	/**
	 * Valor INSS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var decimal
	 */
	public float $valor_inss;
	/**
	 * Reter INSS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido "N" por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $retem_inss;
	/**
	 * Distribuição por Departamentos.<BR>Preenchimento Opcional.<BR><BR>
	 *
	 * @var Distribuicao[]
	 */
	public array $distribuicao;
	/**
	 * Número do Pedido.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $numero_pedido;
	/**
	 * Código do Tipo de Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $codigo_tipo_documento;
	/**
	 * Número do Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $numero_documento;
	/**
	 * Número da parcela.<BR>Preenchimento Opcional.<BR><BR>Utilizar o formato "999/999".<BR><BR>Para 1 parcela utilize "001/001"<BR><BR>Se não informado assumirá o valor "001/001".<BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>
	 *
	 * @var string
	 */
	public string $numero_parcela;
	/**
	 * Chave da NF.e.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
	 *
	 * @var string
	 */
	public string $chave_nfe;
	/**
	 * Código de Barras (de Cobrança Bancária, de Concessionária ou de Impostos)<BR><BR>Preenchimento obrigatório quando informado "BOL" no Código da Forma de Pagamento.<BR>
	 *
	 * @var string
	 */
	public string $codigo_barras_ficha_compensacao;
	/**
	 * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codigo_vendedor;
	/**
	 * Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>"APIP" - Integração de Conta a Pagar<BR>"BARP" - Conta a Pagar Importada por Código de Barras<BR>"COMP" - Parcela a Pagar de Compras<BR>"CTEP" - Parcela a Pagar de um CT-e<BR>"DEVP" - Conta a Pagar da Devolução de Venda<BR>"IMPP" - Parcela a Pagar de uma Nota de Importação<BR>"MANP" - Lançamento Manual de Conta a Pagar<BR>"NFEP" - Conta a Pagar Importada de uma NF-e<BR>"RPTP" - Repetição de Contas a Pagar<BR>"XMLP" - Conta a Pagar Importada de um arquivo XML
	 *
	 * @var string
	 */
	public string $id_origem;
	/**
	 * Informações sobre a criação/alteração do lançamento de Contas a Pagar.<BR>Preenchimento automático - Não informar.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Código da Operação. .<BR>Preenchimento Automático - Não preencher.<BR><BR>Esse campo indica qual tipo de operação está associada ao lançamento de Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>"01" - Venda de Serviço<BR>"11" - Venda de Produto<BR>"12" - Venda de Produto pelo PDV<BR>"13" - Devolução de Venda<BR>"14" - Remessa de Produto<BR>"16" - Nota Complementar de Saída
	 *
	 * @var string
	 */
	public string $operacao;
	/**
	 * Status do Título.<BR>Preenchimento automático - Não informar.<BR><BR>Essa informação é retornada na consulta/pesquisa dos lançamentos de Contas a Pagar.
	 *
	 * @var string
	 */
	public string $status_titulo;
	/**
	 * DEPRECATED.
	 *
	 * @var string
	 */
	public string $nsu;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $acao;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $id_conta_corrente_integracao;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $baixa_bloqueada;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $codigo_cmc7_cheque;
	/**
	 * Importado pela API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * Bloqueia a exclusão do registro. (S/N)
	 *
	 * @var string
	 */
	public string $bloquear_exclusao;
	/**
	 * Dados do CNAB e Integração Bancária.
	 *
	 * @var Cnab_integracao_bancaria
	 */
	public Cnab_integracao_bancaria $cnab_integracao_bancaria;
	/**
	 * Informações da aba de Serviço Tomado da Ordem de Serviço.
	 *
	 * @var Servico_tomado
	 */
	public Servico_tomado $servico_tomado;
	/**
	 * Valor a pagar.<BR><BR>Disponível apenas para os métodos de consulta e listagem.
	 *
	 * @var decimal
	 */
	public float $valor_pag;
	/**
	 * Aprendizado de rateio de departamento.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Quando essa tag for preenchida com "S" será assumido o rateio de departamento para a categoria informada na tag "codigo_categoria".<BR><BR>Essa tag é utilizada apenas nos métodos de inclusão e alteração.
	 *
	 * @var string
	 */
	public string $aprendizado_rateio;
	/**
	 * Efetua a baixa automática do documento.
	 *
	 * @var string
	 */
	public string $baixar_documento;
	/**
	 * Efetua a conciliação do documento automaticamente. Opcional.<BR><BR>Preencher com S/N.
	 *
	 * @var string
	 */
	public string $conciliar_documento;
	/**
	 * Detalhes do pagamento(baixa).<BR>Informe aqui os detalhes do pagamento do lançamento.<BR><BR>Ao preencher esse campo é possível detalhar informações da baixa do documento, como: Valor pago, Desconto, Juros, Multa, etc.<BR>   <BR>Quando essa tag estiver preenchida é obrigatório o preenchimento da tag "baixar_documento" com "S" <BR><BR>Caso essa tag não seja preenchida o lançamento será baixado de forma integral de acordo com os valores do lançamento.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Informação localizada na Aba "Pagamentos" no cadastro do lançamento.<BR><BR>Preenchimento opcional.
	 *
	 * @var Pagamento
	 */
	public Pagamento $pagamento;
}
