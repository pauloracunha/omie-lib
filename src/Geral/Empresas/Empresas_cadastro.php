<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de Empresas
 *
 * @pw_element string $nfse_off Permite desmarcar a opção de emitir NFS-e na Prefeitura mesmo depois de marcada [S/N]
 * @pw_element string $regapu Código do regime de apuração
 * @pw_element string $nire Número de Identificação do Registro da Empresa (Junta Comercial)
 * @pw_element decimal $recbru_12 Receita Bruta em 12 Meses
 * @pw_element string $tp_ativ Tipo da Atividade
 * @pw_element string $proc_cert (S/N) Tem procuração para o certificado digital
 * @pw_element string $prc_gcgcpf CNPJ ou CPF da procuração do certificado digital
 * @pw_element string $dtnire Data do NIRE
 * @pw_element string $ct_eskey Certificado digital do eSocial
 * @pw_element string $ct_espass Certificado digital do eSocial (senha)
 * @pw_element string $ct_esvlpss Certificado digiral VALPASS
 * @pw_element string $un_cert (S/N) Usar mesmo certificado digital
 * @pw_element integer $ct_esidkey ID do Arquivo do Certificado digital eSocial
 * @pw_element string $csc_idh Identificador do Código de Segurança do Contribuinte (CSC) usado em ambiente Homologação
 * @pw_element string $csc_idp Identificador do Código de Segurança do Contribuinte (CSC) usado em ambiente Produção
 * @pw_element string $nfsenac_sn Gera Nota Fiscal de Serviço Eletrônica NACIONAL [S/N]
 * @pw_element string $frete_sn Identifica que a empresa utiliza cotação de frete.
 * @pw_element string $ctrprev_aj Parâmetro para calcular as previsões do contrato da forma correta
 * @pw_element string $ct_esisuer Certificado Emitido por (eSocial)
 * @pw_element string $ct_esname Certificado Digital eSocial - Nome
 * @pw_element string $ct_essubj Certificado digital eSocial - Emitido para
 * @pw_element string $ct_estmfrm Certificado Digital eSocial Valido até
 * @pw_element string $ct_estmto Certificado Digital eSocial Valido até
 * @pw_element string $ct_esdtfrm Certificado Digital eSocial válido até
 * @pw_element string $ct_esdtto Certificado digital eSocial valido até
 * @pw_element string $qualificpj Qualificação da Pessoa Jurídica.
 * @pw_element string $viaunica Identifica que a empresa é emissora de Nota Fiscal Via Única (Modelo 06, 21 e 22)
 * @pw_element string $vu_padrao Padrão de NFS-e utilizado para documentos Via Única (modelo 06/21/22)
 * @pw_element decimal $recbr_ano Receita Bruta do Ano Calendário
 * @pw_element string $got_cert (S/N) Usar o certificado digital do escritório OneFlow
 * @pw_element string $got_certpr (S/N) Usar o certificado digital do procurador do escritório OneFlow.
 * @pw_element string $ct_name Certificado - Nome
 * @pw_element string $alt_user Usuário de alteração
 * @pw_element string $contato Contato
 * @pw_element string $ct_tm_from Certificado - Valido até (hora)
 * @pw_element string $ct_tm_to Certificado - Válido até (hora)
 * @pw_element string $estab Tipo de estabelecimento = M.atriz, F.ilial ou U.nico
 * @pw_element string $got_ativo Indica se a Empresa está ativa em algum módulo do GOT (Fiscal, Contábil, Folha) [S/N]
 * @pw_element integer $got_idmatr GOT - ID service da matriz
 * @pw_element integer $got_svcid Service ID do APP do Contador
 * @pw_element string $dtabertura Data de Abertura da Empresa
 * @pw_element string $inc_user Usuário de inclusão
 * @pw_element string $recibo_tit Título para o Recibo de Prestação de Serviço
 * @pw_element string $mdfe_sn Gera o Manifesto de Documentos Fiscais Eletônico [S/N]
 * @pw_element string $nfce_sn Gera Nota Fiscal Consumidor Final (S/N)
 * @pw_element string $nfe_off Permite desmarcar a opção de emitir NF-e na SEFAZ mesmo depois de marcada [S/N]
 * @pw_element integer $codigo_empresa Código da Empresa
 * @pw_element string $codigo_empresa_integracao Código de Integração
 * @pw_element string $cnpj CNPJ da Empresa
 * @pw_element string $razao_social Razão Social
 * @pw_element string $nome_fantasia Nome Fantasia
 * @pw_element string $logradouro Logradouro
 * @pw_element string $endereco Endereço da Empresa
 * @pw_element string $endereco_numero Número do Endereço
 * @pw_element string $complemento Complemento do Número do Endereço
 * @pw_element string $bairro Bairro
 * @pw_element string $cidade Código da Cidade
 * @pw_element string $estado Estado da Empresa
 * @pw_element string $cep CEP
 * @pw_element string $codigo_pais Código do País
 * @pw_element string $data_adesao_sn Data de Adesão ao Simples Nacional
 * @pw_element string $telefone1_ddd DDD
 * @pw_element string $telefone1_numero Telefones da Empresa
 * @pw_element string $telefone2_ddd DDD Telefone 2
 * @pw_element string $telefone2_numero Telefone 2
 * @pw_element string $fax_ddd DDD Fax
 * @pw_element string $fax_numero Fax da Empresa
 * @pw_element string $email E-mail da Empresa
 * @pw_element string $website WebSite
 * @pw_element string $cnae Código do CNAE - Fiscal
 * @pw_element string $cnae_municipal Código do CNAE - Municipal
 * @pw_element string $inscricao_estadual Inscrição Estadual
 * @pw_element string $inscricao_municipal Inscrição Municipal
 * @pw_element string $inscricao_suframa Inscrição no SUFRAMA
 * @pw_element string $regime_tributario Regime Tributário
 * @pw_element string $inativa Indica que a empresa está ativa
 * @pw_element string $gera_nfse Gera Nota Fiscal de Serviço Eletrônica para o Município [S/N]
 * @pw_element string $optante_simples_nacional Indica que a empresa é optante pelo Simples Nacional
 * @pw_element string $sped_codigo_incidencia_tributaria SPED PIS/COFINS - Código Indicador da Incidência Tributária no Período
 * @pw_element string $sped_codigo_tipo_contribuicao SPED PIS/COFINS - Código indicador do Tipo de Contribuição Apurada no Período
 * @pw_element string $sped_cpf_contador SPED - CPF do Contador Responsável  pela Empresa
 * @pw_element string $sped_crc_contador SPED - CRC do Contador Responsável  pela Empresa
 * @pw_element string $sped_usa_contabilidade_terceirizada SPED - Indica se a Empresa utiliza Contabilidade Terceirizada
 * @pw_element string $sped_email_contador SPED - Email do Contador da Empresa
 * @pw_element string $sped_codigo_indicador_apropriacao_credito SPED PIS/COFINS - Código Código Indicador de Método de Apropriação de Créditos Comuns
 * @pw_element string $sped_codigo_tipo_atividade SPED PIS/COFINS - Código Indicador de Tipo de Atividade Preponderante
 * @pw_element string $sped_natureza_pessoa_juridica SPED PIS/COFINS - Indicador da Natureza da Pessoa Jurídica
 * @pw_element string $sped_codigo_criterio_escrituracao SPED PIS/COFINS - Código Indicador do Critério de Escrituração e Apuração
 * @pw_element string $sped_junta_comercial SPED - Indica se o Local do Registro é Junta  Comercial
 * @pw_element string $sped_matriz SPED - Indica se a empresa é Matriz
 * @pw_element string $sped_nome_contador SPED - Nome do Contador Responsável  pela Empresa
 * @pw_element string $sped_registro_junta_comercial SPED - Número do Registro da Empresa na Junta Comercial ou no Cartório
 * @pw_element string $efd_atividade_industrial EFD - Indica se a atividade é industrial ou equiparado a indústria
 * @pw_element string $efd_perfil_arquivo_fiscal Perfil de Apresentação do Arquivo Fiscal - EFD
 * @pw_element string $ecd_codigo_cadastral SPED / ECD - Código cadastral na Instituição Responsável
 * @pw_element string $ecd_codigo_instituicao_responsavel SPED / ECD - Código da Instituição Responsável pela Administração do Cadastro
 * @pw_element string $gera_nfe Gera Nota Fiscal Eletrônica Âmbito Nacional (DANFE) [S/N]
 * @pw_element string $inclusao_data Data de inclusão
 * @pw_element string $inclusao_hora Hora de inclusão.
 * @pw_element string $alteracao_data Data de alteração
 * @pw_element string $alteracao_hora Hora de alteração
 * @pw_element string $bloqueado Registro bloqueado pela API
 * @pw_element string $importado_api Importado da API.
 * @pw_element string $pdv_sincr_analitica Sincronizar Estoque de Forma Análitica (Venda a Venda)
 * @pw_element string $dt_adesao_simpnac Data de Adesão do Simples Nacional
 * @pw_element string $ie_st Inscrição Estadual para ST
 * @pw_element string $recibo_ide Identificação do Profissional (contador, advogado, etc) para o Recibo de Prestação de Serviço
 * @pw_element string $gera_recibo Gera Recibo de Prestação de Serviço [S/N]
 * @pw_element string $recibo_tipo Tipo (modelo) do Recibo de Prestação de Serviço
 * @pw_element string $recibo_num_vias Indica se o Recibo de Prestação de Serviço será gerado em 2 vias
 * @pw_element string $csc_id_homologacao Identificador do Código de Segurança do Contribuinte em ambiente homologação
 * @pw_element string $csc_homologacao Código de Segurança do Contribuinte em ambiente de homologação
 * @pw_element string $csc_id_producao Identificador do Código de Segurança do Contribuinte em ambiente produção
 * @pw_element string $csc_producao Código de Segurança do Contribuinte em ambiente de produção
 * @pw_complex empresas_cadastro
 */
class Empresas_cadastro{
	/**
	 * Permite desmarcar a opção de emitir NFS-e na Prefeitura mesmo depois de marcada [S/N]
	 *
	 * @var string
	 */
	public string $nfse_off;
	/**
	 * Código do regime de apuração
	 *
	 * @var string
	 */
	public string $regapu;
	/**
	 * Número de Identificação do Registro da Empresa (Junta Comercial)
	 *
	 * @var string
	 */
	public string $nire;
	/**
	 * Receita Bruta em 12 Meses
	 *
	 * @var decimal
	 */
	public float $recbru_12;
	/**
	 * Tipo da Atividade
	 *
	 * @var string
	 */
	public string $tp_ativ;
	/**
	 * (S/N) Tem procuração para o certificado digital
	 *
	 * @var string
	 */
	public string $proc_cert;
	/**
	 * CNPJ ou CPF da procuração do certificado digital
	 *
	 * @var string
	 */
	public string $prc_gcgcpf;
	/**
	 * Data do NIRE
	 *
	 * @var string
	 */
	public string $dtnire;
	/**
	 * Certificado digital do eSocial
	 *
	 * @var string
	 */
	public string $ct_eskey;
	/**
	 * Certificado digital do eSocial (senha)
	 *
	 * @var string
	 */
	public string $ct_espass;
	/**
	 * Certificado digiral VALPASS
	 *
	 * @var string
	 */
	public string $ct_esvlpss;
	/**
	 * (S/N) Usar mesmo certificado digital
	 *
	 * @var string
	 */
	public string $un_cert;
	/**
	 * ID do Arquivo do Certificado digital eSocial
	 *
	 * @var integer
	 */
	public int $ct_esidkey;
	/**
	 * Identificador do Código de Segurança do Contribuinte (CSC) usado em ambiente Homologação
	 *
	 * @var string
	 */
	public string $csc_idh;
	/**
	 * Identificador do Código de Segurança do Contribuinte (CSC) usado em ambiente Produção
	 *
	 * @var string
	 */
	public string $csc_idp;
	/**
	 * Gera Nota Fiscal de Serviço Eletrônica NACIONAL [S/N]
	 *
	 * @var string
	 */
	public string $nfsenac_sn;
	/**
	 * Identifica que a empresa utiliza cotação de frete.
	 *
	 * @var string
	 */
	public string $frete_sn;
	/**
	 * Parâmetro para calcular as previsões do contrato da forma correta
	 *
	 * @var string
	 */
	public string $ctrprev_aj;
	/**
	 * Certificado Emitido por (eSocial)
	 *
	 * @var string
	 */
	public string $ct_esisuer;
	/**
	 * Certificado Digital eSocial - Nome
	 *
	 * @var string
	 */
	public string $ct_esname;
	/**
	 * Certificado digital eSocial - Emitido para
	 *
	 * @var string
	 */
	public string $ct_essubj;
	/**
	 * Certificado Digital eSocial Valido até
	 *
	 * @var string
	 */
	public string $ct_estmfrm;
	/**
	 * Certificado Digital eSocial Valido até
	 *
	 * @var string
	 */
	public string $ct_estmto;
	/**
	 * Certificado Digital eSocial válido até
	 *
	 * @var string
	 */
	public string $ct_esdtfrm;
	/**
	 * Certificado digital eSocial valido até
	 *
	 * @var string
	 */
	public string $ct_esdtto;
	/**
	 * Qualificação da Pessoa Jurídica.
	 *
	 * @var string
	 */
	public string $qualificpj;
	/**
	 * Identifica que a empresa é emissora de Nota Fiscal Via Única (Modelo 06, 21 e 22)
	 *
	 * @var string
	 */
	public string $viaunica;
	/**
	 * Padrão de NFS-e utilizado para documentos Via Única (modelo 06/21/22)
	 *
	 * @var string
	 */
	public string $vu_padrao;
	/**
	 * Receita Bruta do Ano Calendário
	 *
	 * @var decimal
	 */
	public float $recbr_ano;
	/**
	 * (S/N) Usar o certificado digital do escritório OneFlow
	 *
	 * @var string
	 */
	public string $got_cert;
	/**
	 * (S/N) Usar o certificado digital do procurador do escritório OneFlow.
	 *
	 * @var string
	 */
	public string $got_certpr;
	/**
	 * Certificado - Nome
	 *
	 * @var string
	 */
	public string $ct_name;
	/**
	 * Usuário de alteração
	 *
	 * @var string
	 */
	public string $alt_user;
	/**
	 * Contato
	 *
	 * @var string
	 */
	public string $contato;
	/**
	 * Certificado - Valido até (hora)
	 *
	 * @var string
	 */
	public string $ct_tm_from;
	/**
	 * Certificado - Válido até (hora)
	 *
	 * @var string
	 */
	public string $ct_tm_to;
	/**
	 * Tipo de estabelecimento = M.atriz, F.ilial ou U.nico
	 *
	 * @var string
	 */
	public string $estab;
	/**
	 * Indica se a Empresa está ativa em algum módulo do GOT (Fiscal, Contábil, Folha) [S/N]
	 *
	 * @var string
	 */
	public string $got_ativo;
	/**
	 * GOT - ID service da matriz
	 *
	 * @var integer
	 */
	public int $got_idmatr;
	/**
	 * Service ID do APP do Contador
	 *
	 * @var integer
	 */
	public int $got_svcid;
	/**
	 * Data de Abertura da Empresa
	 *
	 * @var string
	 */
	public string $dtabertura;
	/**
	 * Usuário de inclusão
	 *
	 * @var string
	 */
	public string $inc_user;
	/**
	 * Título para o Recibo de Prestação de Serviço
	 *
	 * @var string
	 */
	public string $recibo_tit;
	/**
	 * Gera o Manifesto de Documentos Fiscais Eletônico [S/N]
	 *
	 * @var string
	 */
	public string $mdfe_sn;
	/**
	 * Gera Nota Fiscal Consumidor Final (S/N)
	 *
	 * @var string
	 */
	public string $nfce_sn;
	/**
	 * Permite desmarcar a opção de emitir NF-e na SEFAZ mesmo depois de marcada [S/N]
	 *
	 * @var string
	 */
	public string $nfe_off;
	/**
	 * Código da Empresa
	 *
	 * @var integer
	 */
	public int $codigo_empresa;
	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public string $codigo_empresa_integracao;
	/**
	 * CNPJ da Empresa
	 *
	 * @var string
	 */
	public string $cnpj;
	/**
	 * Razão Social
	 *
	 * @var string
	 */
	public string $razao_social;
	/**
	 * Nome Fantasia
	 *
	 * @var string
	 */
	public string $nome_fantasia;
	/**
	 * Logradouro
	 *
	 * @var string
	 */
	public string $logradouro;
	/**
	 * Endereço da Empresa
	 *
	 * @var string
	 */
	public string $endereco;
	/**
	 * Número do Endereço
	 *
	 * @var string
	 */
	public string $endereco_numero;
	/**
	 * Complemento do Número do Endereço
	 *
	 * @var string
	 */
	public string $complemento;
	/**
	 * Bairro
	 *
	 * @var string
	 */
	public string $bairro;
	/**
	 * Código da Cidade
	 *
	 * @var string
	 */
	public string $cidade;
	/**
	 * Estado da Empresa
	 *
	 * @var string
	 */
	public string $estado;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public string $cep;
	/**
	 * Código do País
	 *
	 * @var string
	 */
	public string $codigo_pais;
	/**
	 * Data de Adesão ao Simples Nacional
	 *
	 * @var string
	 */
	public string $data_adesao_sn;
	/**
	 * DDD
	 *
	 * @var string
	 */
	public string $telefone1_ddd;
	/**
	 * Telefones da Empresa
	 *
	 * @var string
	 */
	public string $telefone1_numero;
	/**
	 * DDD Telefone 2
	 *
	 * @var string
	 */
	public string $telefone2_ddd;
	/**
	 * Telefone 2
	 *
	 * @var string
	 */
	public string $telefone2_numero;
	/**
	 * DDD Fax
	 *
	 * @var string
	 */
	public string $fax_ddd;
	/**
	 * Fax da Empresa
	 *
	 * @var string
	 */
	public string $fax_numero;
	/**
	 * E-mail da Empresa
	 *
	 * @var string
	 */
	public string $email;
	/**
	 * WebSite
	 *
	 * @var string
	 */
	public string $website;
	/**
	 * Código do CNAE - Fiscal
	 *
	 * @var string
	 */
	public string $cnae;
	/**
	 * Código do CNAE - Municipal
	 *
	 * @var string
	 */
	public string $cnae_municipal;
	/**
	 * Inscrição Estadual
	 *
	 * @var string
	 */
	public string $inscricao_estadual;
	/**
	 * Inscrição Municipal
	 *
	 * @var string
	 */
	public string $inscricao_municipal;
	/**
	 * Inscrição no SUFRAMA
	 *
	 * @var string
	 */
	public string $inscricao_suframa;
	/**
	 * Regime Tributário
	 *
	 * @var string
	 */
	public string $regime_tributario;
	/**
	 * Indica que a empresa está ativa
	 *
	 * @var string
	 */
	public string $inativa;
	/**
	 * Gera Nota Fiscal de Serviço Eletrônica para o Município [S/N]
	 *
	 * @var string
	 */
	public string $gera_nfse;
	/**
	 * Indica que a empresa é optante pelo Simples Nacional
	 *
	 * @var string
	 */
	public string $optante_simples_nacional;
	/**
	 * SPED PIS/COFINS - Código Indicador da Incidência Tributária no Período
	 *
	 * @var string
	 */
	public string $sped_codigo_incidencia_tributaria;
	/**
	 * SPED PIS/COFINS - Código indicador do Tipo de Contribuição Apurada no Período
	 *
	 * @var string
	 */
	public string $sped_codigo_tipo_contribuicao;
	/**
	 * SPED - CPF do Contador Responsável  pela Empresa
	 *
	 * @var string
	 */
	public string $sped_cpf_contador;
	/**
	 * SPED - CRC do Contador Responsável  pela Empresa
	 *
	 * @var string
	 */
	public string $sped_crc_contador;
	/**
	 * SPED - Indica se a Empresa utiliza Contabilidade Terceirizada
	 *
	 * @var string
	 */
	public string $sped_usa_contabilidade_terceirizada;
	/**
	 * SPED - Email do Contador da Empresa
	 *
	 * @var string
	 */
	public string $sped_email_contador;
	/**
	 * SPED PIS/COFINS - Código Código Indicador de Método de Apropriação de Créditos Comuns
	 *
	 * @var string
	 */
	public string $sped_codigo_indicador_apropriacao_credito;
	/**
	 * SPED PIS/COFINS - Código Indicador de Tipo de Atividade Preponderante
	 *
	 * @var string
	 */
	public string $sped_codigo_tipo_atividade;
	/**
	 * SPED PIS/COFINS - Indicador da Natureza da Pessoa Jurídica
	 *
	 * @var string
	 */
	public string $sped_natureza_pessoa_juridica;
	/**
	 * SPED PIS/COFINS - Código Indicador do Critério de Escrituração e Apuração
	 *
	 * @var string
	 */
	public string $sped_codigo_criterio_escrituracao;
	/**
	 * SPED - Indica se o Local do Registro é Junta  Comercial
	 *
	 * @var string
	 */
	public string $sped_junta_comercial;
	/**
	 * SPED - Indica se a empresa é Matriz
	 *
	 * @var string
	 */
	public string $sped_matriz;
	/**
	 * SPED - Nome do Contador Responsável  pela Empresa
	 *
	 * @var string
	 */
	public string $sped_nome_contador;
	/**
	 * SPED - Número do Registro da Empresa na Junta Comercial ou no Cartório
	 *
	 * @var string
	 */
	public string $sped_registro_junta_comercial;
	/**
	 * EFD - Indica se a atividade é industrial ou equiparado a indústria
	 *
	 * @var string
	 */
	public string $efd_atividade_industrial;
	/**
	 * Perfil de Apresentação do Arquivo Fiscal - EFD
	 *
	 * @var string
	 */
	public string $efd_perfil_arquivo_fiscal;
	/**
	 * SPED / ECD - Código cadastral na Instituição Responsável
	 *
	 * @var string
	 */
	public string $ecd_codigo_cadastral;
	/**
	 * SPED / ECD - Código da Instituição Responsável pela Administração do Cadastro
	 *
	 * @var string
	 */
	public string $ecd_codigo_instituicao_responsavel;
	/**
	 * Gera Nota Fiscal Eletrônica Âmbito Nacional (DANFE) [S/N]
	 *
	 * @var string
	 */
	public string $gera_nfe;
	/**
	 * Data de inclusão
	 *
	 * @var string
	 */
	public string $inclusao_data;
	/**
	 * Hora de inclusão.
	 *
	 * @var string
	 */
	public string $inclusao_hora;
	/**
	 * Data de alteração
	 *
	 * @var string
	 */
	public string $alteracao_data;
	/**
	 * Hora de alteração
	 *
	 * @var string
	 */
	public string $alteracao_hora;
	/**
	 * Registro bloqueado pela API
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Importado da API.
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * Sincronizar Estoque de Forma Análitica (Venda a Venda)
	 *
	 * @var string
	 */
	public string $pdv_sincr_analitica;
	/**
	 * Data de Adesão do Simples Nacional
	 *
	 * @var string
	 */
	public string $dt_adesao_simpnac;
	/**
	 * Inscrição Estadual para ST
	 *
	 * @var string
	 */
	public string $ie_st;
	/**
	 * Identificação do Profissional (contador, advogado, etc) para o Recibo de Prestação de Serviço
	 *
	 * @var string
	 */
	public string $recibo_ide;
	/**
	 * Gera Recibo de Prestação de Serviço [S/N]
	 *
	 * @var string
	 */
	public string $gera_recibo;
	/**
	 * Tipo (modelo) do Recibo de Prestação de Serviço
	 *
	 * @var string
	 */
	public string $recibo_tipo;
	/**
	 * Indica se o Recibo de Prestação de Serviço será gerado em 2 vias
	 *
	 * @var string
	 */
	public string $recibo_num_vias;
	/**
	 * Identificador do Código de Segurança do Contribuinte em ambiente homologação
	 *
	 * @var string
	 */
	public string $csc_id_homologacao;
	/**
	 * Código de Segurança do Contribuinte em ambiente de homologação
	 *
	 * @var string
	 */
	public string $csc_homologacao;
	/**
	 * Identificador do Código de Segurança do Contribuinte em ambiente produção
	 *
	 * @var string
	 */
	public string $csc_id_producao;
	/**
	 * Código de Segurança do Contribuinte em ambiente de produção
	 *
	 * @var string
	 */
	public string $csc_producao;
}
